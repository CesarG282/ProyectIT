<?php

namespace App\Http\Controllers;

use App\Models\GenericsAccount;
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
        $genericsAccounts = GenericsAccount::paginate();

        return view('generics-account.index', compact('genericsAccounts'))
            ->with('i', (request()->input('page', 1) - 1) * $genericsAccounts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genericsAccount = new GenericsAccount();
        return view('generics-account.create', compact('genericsAccount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenericsAccountRequest $request)
    {
        GenericsAccount::create($request->validated());

        return redirect()->route('generics-accounts.index')
            ->with('success', 'GenericsAccount created successfully.');
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
        $genericsAccount = GenericsAccount::find($id);

        return view('generics-account.edit', compact('genericsAccount'));
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
