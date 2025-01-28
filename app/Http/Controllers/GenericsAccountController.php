<?php

namespace App\Http\Controllers;

use App\Models\GenericsAccount;
use App\Models\User;
use App\Http\Requests\GenericsAccountRequest;

/**
 * Class GenericsAccountController
 * @package App\Http\Controllers
 */
class GenericsAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Traemos todos los registros de GenericsAccount con paginación
        $genericsAccounts = GenericsAccount::paginate();

        // Retornamos la vista generics-account.index con los datos necesarios
        return view('generics-account.index', compact('genericsAccounts'))
            ->with('i', (request()->input('page', 1) - 1) * $genericsAccounts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Traemos todos los usuarios para que puedan ser seleccionados en el formulario
        $users = User::all(); 

        // Creamos una nueva instancia de GenericsAccount
        $genericsAccount = new GenericsAccount();
    
        return view('generics-account.create', compact('genericsAccount', 'users')); // Usamos la variable genericsAccount
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenericsAccountRequest $request)
    {
        // Creamos un nuevo registro de GenericsAccount con los datos validados
        GenericsAccount::create($request->validated());
    
        return redirect()->route('generics-accounts.index') // Redirigimos al índice de GenericsAccount
            ->with('success', 'Generics Account created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $genericsAccount = GenericsAccount::find($id);

        return view('generics-account.show', compact('genericsAccount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontramos el miembro que estamos editando
        $genericsAccount = GenericsAccount::find($id);
    
        // Cargamos todos los usuarios para que puedan ser seleccionados en el formulario
        $users = \App\Models\User::all();
    
        // Pasamos tanto el miembro como los usuarios a la vista
        return view('generics-account.edit', compact('genericsAccount', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenericsAccountRequest $request, GenericsAccount $genericsAccount)
    {
        $genericsAccount->update($request->validated());

        return redirect()->route('generics-accounts.index')
            ->with('success', 'GenericsAccount updated successfully');
    }

    public function destroy($id)
    {
        GenericsAccount::find($id)->delete();

        return redirect()->route('generics-accounts.index')
            ->with('success', 'GenericsAccount deleted successfully');
    }
}
