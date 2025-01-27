<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use App\Models\User;
use App\Http\Requests\MovementRequest;

/**
 * Class MovementController
 * @package App\Http\Controllers
 */
class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::paginate();

        return view('movement.index', compact('movements'))
            ->with('i', (request()->input('page', 1) - 1) * $movements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all(); 
    
        // Creamos una nueva instancia de Movement (no GenericsAccount)
        $movement = new Movement();  // Cambié de $genericsAccount a $movement
        
        return view('movement.create', compact('movement', 'users'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(MovementRequest $request)
    {
        // Creamos un nuevo registro de Movement con los datos validados
        Movement::create($request->validated());  // Aquí creamos el movimiento correctamente
    
        return redirect()->route('movement.index') // Redirigimos al índice de movimientos
            ->with('success', 'Movement created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movement = Movement::find($id);

        return view('movement.show', compact('movement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movement = Movement::find($id);

        return view('movement.edit', compact('movement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovementRequest $request, Movement $movement)
    {
        $movement->update($request->validated());

        return redirect()->route('movements.index')
            ->with('success', 'Movement updated successfully');
    }

    public function destroy($id)
    {
        Movement::find($id)->delete();

        return redirect()->route('movements.index')
            ->with('success', 'Movement deleted successfully');
    }
}
