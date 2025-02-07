<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\MemberRequest;

/**
 * Class MemberController
 * @package App\Http\Controllers
 */
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::paginate();

        return view('member.index', compact('members'))
            ->with('i', (request()->input('page', 1) - 1) * $members->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Traemos todos los usuarios para que puedan ser seleccionados en el formulario
        $users = \App\Models\User::all(); 
    
        // Creamos un nuevo miembro
        $member = new Member();
    
        return view('member.create', compact('member', 'users'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberRequest $request)
{
    // Creamos el nuevo miembro usando los datos validados
    Member::create($request->validated());

    return redirect()->route('members.index')
        ->with('success', 'Member created successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $member = Member::find($id);

        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Encontramos el miembro que estamos editando
    $member = Member::find($id);

    // Cargamos todos los usuarios para que puedan ser seleccionados en el formulario
    $users = \App\Models\User::all();

    // Pasamos tanto el miembro como los usuarios a la vista
    return view('member.edit', compact('member', 'users'));
}

    

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberRequest $request, Member $member)
    {
        $member->update($request->validated());

        return redirect()->route('members.index')
            ->with('success', 'Member updated successfully');
    }

    public function destroy($id)
    {
        // Eliminar el miembro
        $member = Member::find($id);
    
        if ($member) {
            $member->delete();
        }
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('members.index')
            ->with('eliminar', 'ok'); // Asegúrate de que el nombre sea 'eliminar'
    }
    
    
}
