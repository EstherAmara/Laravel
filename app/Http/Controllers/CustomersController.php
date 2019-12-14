<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //this displays all customers in the Customer table.
    public function list() {
        $customers = Customer::all();
//        dd($customers);

        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }

    public function store() {
        //this gets whatever the user enters and stores it in the Customer table

        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email:rfc',
            'title' => 'required',
            'active' => 'required',
        ]);
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->title = request('title');
        $customer->active = request('active');
        $customer->save();

        //go back to the page you're coming from i.e customers.blade.php
        return back();
    }
}
