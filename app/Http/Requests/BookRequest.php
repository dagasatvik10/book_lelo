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
            'type' => 'required|in:books,notes',
            'price' => 'required|numeric',
            'year' => 'alpha_num',
            'pic1' => 'image',
            'pic2' => 'image',
            'pic3' => 'image',
            'pic4' => 'image',
            'pic5' => 'image',
            'pic6' => 'image',
            'branch_id' => 'numeric',
            'author' => 'alpha',
            'publication_year' => 'digits:4',
            'no_of_pages' => 'numeric',
            'need' => 'in:buy,sell',
        ];
    }
}
