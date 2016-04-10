<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(request()->has('role'))
        {
            if(request()->get('role') === 'user')
                return [
                    'first_name'    => 'required',
                    'last_name'     => 'required',
                    'occupation'    => 'required',
                    'country'       => 'required',
                    'email'         => 'required|email|unique:users',
                    'password'      => 'required|confirmed',
                ];
            if(request()->get('role') === 'company')
                return [
                    'name'          => 'required',
                    'category'      => 'required',
                    'subcategory'   => 'required',
                    'country'       => 'required',
                    'email'         => 'required|email|unique:companies',
                    'password'      => 'required|confirmed',
                ];
            if(request()->get('role') === 'festival')
                return [
                    'name'          => 'required',
                    'country'       => 'required',
                    'start_date'    => 'required|date',
                    'end_date'      => 'required|date',
                    'email'         => 'required|email|unique:festivals',
                    'password'      => 'required|confirmed'
                ];
            return ['role'          => 'required|in:user,company,festival'];
        }
    }

    /**
     * Use custom error messages for validation instead of the defaults
     *
     * @return array
     */
    public function messages()
    {
        return 
        [
            'role.required' => 'Such user does not exist !!!',
            'role.in'       => 'You can select User|Company|Festival',
        ];
    }
}
