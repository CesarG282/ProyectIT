<?php

namespace App\Http\Controllers;

use App\Models\MembersAttention;
use App\Models\Member;  // Importar el modelo Member
use App\Http\Requests\MembersAttentionRequest;

/**
 * Class MembersAttentionController
 * @package App\Http\Controllers
 */
class MembersAttentionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membersAttentions = MembersAttention::paginate();

        return view('members-attention.index', compact('membersAttentions'))
            ->with('i', (request()->input('page', 1) - 1) * $membersAttentions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $membersAttentions = new MembersAttention();
    $members = Member::all();  // Obtener todos los miembros de la base de datos
    return view('members-attention.create', compact('members', 'membersAttentions'));  // Pasar los miembros y la variable correcta
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(MembersAttentionRequest $request)
    {
        MembersAttention::create($request->validated());
    
        return redirect()->route('members-attention.index')
            ->with('success', 'MembersAttention created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $membersAttention = MembersAttention::find($id);

        return view('members-attention.show', compact('membersAttention'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontramos el miembro que estamos editando
        $membersAttention = MembersAttention::find($id);
        
        // Cargamos todos los miembros para que puedan ser seleccionados en el formulario
        $members = \App\Models\Member::all();  // Aquí cargamos los miembros de la tabla Member
        
        // Pasamos tanto el miembro que estamos editando como todos los miembros (users) a la vista
        return view('members-attention.edit', compact('members', 'membersAttention'));
    }
    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(MembersAttentionRequest $request, MembersAttention $membersAttention)
    {
        $membersAttention->update($request->validated());

        return redirect()->route('members-attention.index')
            ->with('success', 'MembersAttention updated successfully');
    }

    public function destroy($id)
    {
        MembersAttention::find($id)->delete();

        return redirect()->route('members-attentions.index')
            ->with('success', 'MembersAttention deleted successfully');
    }
}
