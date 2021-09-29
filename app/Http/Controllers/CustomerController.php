<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers()
    {
        $customers = Customer::all();

        return response()->json($customers);
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }

    public function add(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required'
        ]);

        $newCustomer = new Customer([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone')
        ]);

        $newCustomer->save();

        return response()->json($newCustomer);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required'
        ]);

        $customer->first_name = $request->get('first_name');
        $customer->last_name = $request->get('last_name');
        $customer->email = $request->get('email');
        $customer->phone = $request->get('phone');

        $customer->save();

        return response()->json($customer);
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json($customer::all());
    }
}
