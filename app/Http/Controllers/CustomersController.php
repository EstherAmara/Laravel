<?php

namespace App\Http\Controllers;

use App\Customer,
    App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //this displays all customers in the Customer table.
    public function index() {
        $activeCustomers = Customer::active($num=1)->get();
        $inactiveCustomers = Customer::active($num = 2)->get();
        $companies = Company::all();

//        $customers = Customer::all(); Used to get all records
//        dd($customers); this works just like var_dump

//        return view('internals.customers', [
//            'activeCustomers' => $activeCustomers,
//            'inactiveCustomers' => $inactiveCustomers
//        ]);

//        this is the shorter version of the above function
        return view('customers.index', compact(
            'activeCustomers',
            'inactiveCustomers',
            'companies'
        ));
    }

    public function create() {
        return view ('customers.create');
    }

    public function store() {
        //this gets whatever the user enters and stores it in the Customer table

        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email:rfc',
            'title' => 'required',
            'active' => 'required',
            'company_id' => 'required'
        ]);


        Customer::create($data);
//        if($data) {
//            $customer = new Customer();
//            $customer->name = request('name');
//            $customer->email = request('email');
//            $customer->title = request('title');
//            $customer->active = request('active');
//            $customer->save();
//        }

        //go back to the page you're coming from i.e index.blade.php
        return back();
    }
}
