<?php

namespace App\Http\Controllers;

use App\Models\Assigned;
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
        return view('assigned.create', compact('assigned'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AssignedRequest $request)
    {
        Assigned::create($request->validated());

        return redirect()->route('assigneds.index')
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
        $assigned = Assigned::find($id);

        return view('assigned.edit', compact('assigned'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AssignedRequest $request, Assigned $assigned)
    {
        $assigned->update($request->validated());

        return redirect()->route('assigneds.index')
            ->with('success', 'Assigned updated successfully');
    }

    public function destroy($id)
    {
        Assigned::find($id)->delete();

        return redirect()->route('assigneds.index')
            ->with('success', 'Assigned deleted successfully');
    }
}
