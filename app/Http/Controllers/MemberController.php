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
        $member = new Member();
        return view('member.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberRequest $request)
    {
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
        $member = Member::find($id);

        return view('member.edit', compact('member'));
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
        Member::find($id)->delete();

        return redirect()->route('members.index')
            ->with('success', 'Member deleted successfully');
    }
}
