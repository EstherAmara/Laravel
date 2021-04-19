<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Company;

class CompaniesController extends Controller
{
    public function index() {
        $companies = Company::all();

        return view('internals.companies', compact('companies'));
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        Company::create($data);

        return back();
    }
}
