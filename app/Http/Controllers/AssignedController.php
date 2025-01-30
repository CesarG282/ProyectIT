<?php

namespace App\Http\Controllers;

use App\Models\Assigned;
use App\Models\Member;  // Importar el modelo Member
use App\Http\Requests\AssignedRequest;

/**
 * Class AssignedController
 * @package App\Http\Controllers
 */
class AssignedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assigneds = Assigned::paginate();

        return view('assigned.index', compact('assigneds'))
            ->with('i', (request()->input('page', 1) - 1) * $assigneds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assigned = new Assigned();
        $members = Member::all();  // Obtener todos los miembros de la base de datos
        return view('assigned.create', compact('assigned', 'members'));  // Pasar los miembros a la vista
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(AssignedRequest $request)
    {
        Assigned::create($request->validated());
    
        return redirect()->route('assigned.index')
            ->with('success', 'Assigned created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $assigned = Assigned::find($id);

        return view('assigned.show', compact('assigned'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontramos el miembro que estamos editando
        $assigned = Assigned::find($id);
        
        // Cargamos todos los miembros para que puedan ser seleccionados en el formulario
        $members = \App\Models\Member::all();
        
        // Pasamos tanto el miembro como los miembros (users) a la vista
        return view('assigned.edit', compact('assigned', 'members'));
    }
    
    
    /**
     * Update the specified resource in storage.
     */
    public function update(AssignedRequest $request, Assigned $assigned)
    {
        $assigned->update($request->validated());

        return redirect()->route('assigned.index')
            ->with('success', 'Assigned updated successfully');
    }
    public function destroy($id)
    {
        $assigned = Assigned::find($id);
    
        // Si no se encuentra el registro, redirige con un mensaje de error
        if (!$assigned) {
            return redirect()->route('assigned.index')
                ->with('error', 'Assigned not found');
        }
    
        // Si se encuentra, elimina el registro
        $assigned->delete();
    
        return redirect()->route('assigned.index')
            ->with('success', 'Assigned deleted successfully');
    }
    
}
