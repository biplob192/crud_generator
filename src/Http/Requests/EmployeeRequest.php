<?php

namespace Biplob192\CrudGenerator\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store()
    {
        return [
            'name'          => 'required',
            'phone'         => 'required|unique:employees,phone',
            'address'       => 'required',
        ];
    }

    protected function update()
    {
        return [
            'name'      => 'required',
            'phone'     => ['required', Rule::unique('employees')->ignore($this->route('id'))],
            'address'   => 'required',
        ];
    }
}
