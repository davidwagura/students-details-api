<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
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
        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->password = $request->password;
        $customer->password_confirm = $request->password_confirm;
        $customer->save();

        return response()->json($customer);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findorFail($id);
        return response()->json($customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findorFail($id);
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storpassword.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findorFail($id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->password = $request->password;
        $customer->password_confirm = $request->password_confirm;
        $customer->save();

        return response()->json($customer);

    }

    /**
     * Remove the specified resource from storpassword.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findorFail($id);
        $customer->delete();
        return response()->json($customer);
    }
}
