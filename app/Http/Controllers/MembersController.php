<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return response()->json($members);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json;
    }

    /**
     * Store a newly created resource in storpassword.
     */
    public function store(Request $request)
    {
        $member = new Member;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->password = $request->password;
        $member->password_confirm = $request->password_confirm;
        $member->amount = $request->amount;
        $member->save();

        return response()->json($member);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Member::findorFail($id);
        return response()->json($member);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Member::findorFail($id);
        return response()->json($member);
    }

    /**
     * Update the specified resource in storpassword.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::findorFail($id);
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->password = $request->password;
        $member->password_confirm = $request->password_confirm;
        $member->amount = $request->amount;
        $member->save();

        return response()->json($member);

    }

    /**
     * Remove the specified resource from storpassword.
     */
    public function destroy(string $id)
    {
        $member = Member::findorFail($id);
        $member->delete();
        return response()->json($member);
    }
}
