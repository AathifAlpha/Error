<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'responsible' => 'required',
            'staff' => 'required',
            'patient' => 'required', 
            'error' => 'required|array',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Person has been created successfully.');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
  
        $request->validate([
            'responsible' => 'required',
            'staff' => 'required',
            'patient' => 'required', 
            'error' => 'required|array',
        ]);

        $company->fill($request->all())->save();

        return redirect()->route('companies.index')->with('success', 'Person has been updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Person has been deleted successfully.');
    }
}
