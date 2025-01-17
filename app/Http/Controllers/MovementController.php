<?php

namespace App\Http\Controllers;

use App\Models\Movement;
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
        $movement = new Movement();
        return view('movement.create', compact('movement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovementRequest $request)
    {
        Movement::create($request->validated());

        return redirect()->route('movements.index')
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
