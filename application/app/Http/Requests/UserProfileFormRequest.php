<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserProfileFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|alpha|max:50',
            'last_name' => 'alpha|max:50',
            'location'  => 'max:20'
        ];
    }
}
