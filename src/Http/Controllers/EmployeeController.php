<?php

namespace Biplob192\CrudGenerator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Biplob192\CrudGenerator\Models\Employee;
use Biplob192\CrudGenerator\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->get();
        return view('CrudGenerator::employees_index', compact('employees'));
    }


    public function create()
    {
        return view('CrudGenerator::employees_create');
    }


    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());
        return redirect(route('employees.index'));
    }


    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('CrudGenerator::employees_show', compact('employee'));
    }


    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('CrudGenerator::employees_edit', compact('employee'));
    }


    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ]);

        return redirect(route('employees.index'));
    }


    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect(route('employees.index'));
    }
}
