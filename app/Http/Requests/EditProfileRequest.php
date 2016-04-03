<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditProfileRequest extends Request
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
        return [
            //
            'first_name'    => 'required|max:255|min:2',
            'last_name'     => 'required|max:255,|min:2',
            'start_year'    => 'required',
            'duration'      => 'required|in:1,2,3,4',
            'address'       => 'required|min:5|max:255',
            'contact'       => 'required|min:10|max:12',
        ];
    }
}
