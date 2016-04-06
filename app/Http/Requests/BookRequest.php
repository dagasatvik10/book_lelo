<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookRequest extends Request
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
            'name' => 'required',
            'type' => 'required',
            'need' => 'required',
            'price' => 'required',
            'pic1' => 'image',
            'pic2' => 'image',
            'pic3' => 'image',
            'pic4' => 'image',
            'pic5' => 'image',
            'pic6' => 'image'
        ];
    }
}
