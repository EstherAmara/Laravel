<?php

namespace App\Http\Controllers;

use App\Customer,
    App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //this displays all customers in the Customer table.
    public function __construct() {
        //you can add ->only or ->except to restrict stuff
        $this->middleware('auth');
    }

    private function validateRequest() {
        return request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email:rfc',
            'title' => 'required',
            'active' => 'required',
            'company_id' => 'required'
        ]);
    }

    public function index() {
//        $activeCustomers = Customer::active($num=1)->get();
//        $inactiveCustomers = Customer::active($num = 2)->get();

        $customers = Customer::all(); //Used to get all records
//        dd($customers); this works just like var_dump

//        return view('internals.customers', [
//            'activeCustomers' => $activeCustomers,
//            'inactiveCustomers' => $inactiveCustomers
//        ]);

//        this is the shorter version of the above function
        return view('customers.index', compact(
            'customers'
        ));
    }

    public function create() {
        $companies = Company::all();
        $customer = new Customer();

        return view ('customers.create', compact('companies', 'customer'));
    }


    public function store() {
        //this gets whatever the user enters and stores it in the Customer table



        Customer::create($this->validateRequest());
//        if($data) {
//            $customer = new Customer();
//            $customer->name = request('name');
//            $customer->email = request('email');
//            $customer->title = request('title');
//            $customer->active = request('active');
//            $customer->save();
//        }

        //go back to the page you're coming from i.e index.blade.php
//        return back();

        //redirects you to the page specified
        return redirect('customers');
    }

    //one way of doing this
//    public function show($customer) {
////        $customer = Customer::find($customer); This finds the Customer record
//        $customer = Customer::where('id', $customer)->firstOrFail(); //finds the customer record and if the record doesn't exist, it throws a 404 error
//
//        return view('customers.show', compact('customer'));
//    }

    public function show(Customer $customer){
        //automatically searches Customer for a record that matches $customer. If record is nonexistent, shows 404 page
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer) {
        $companies = Company::all();
        return view('customers.edit', compact(
            'customer',
            'companies'
        ));
    }

    public function update(Customer $customer) {
        //this gets whatever the user enters and stores it in the Customer table

//        $data = request()->validate([
//            'title' => 'required',
//            'name' => 'required|min:5',
//            'email' => 'required|email',
//            'active' => 'required',
//            'company_id' => 'required'
//        ]);

        $customer->update($this->validateRequest());

        return redirect('customers/'.$customer->id);
    }

    public function destroy(Customer $customer) {

        $customer->delete();
        return redirect('customers');
    }

}
