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
            'name' => 'required|string|min:2|max:50',
            'author' => 'required|string',
            'type' => 'required|in:books,notes',
            'price' => 'required|numeric',
            'year' => 'numeric',
            'pic1' => 'image|between:1,1000',
            'pic2' => 'image|between:1,1000',
            'pic3' => 'image|between:1,1000',
            'pic4' => 'image|between:1,1000',
            'pic5' => 'image|between:1,1000',
            'pic6' => 'image|between:1,1000',
            'branch_id' => 'numeric',
            'publication_year' => 'digits:4',
            'no_of_pages' => 'numeric',
            'need' => 'in:buy,sell',
        ];
    }

    public function messages()
    {
        return [
        'name.required' => 'Name field is Reuired',
        'name.string' => 'Name must have alphabets only',
        'name.min' => 'Name must be atleast 2 characters',
        'name.max' => 'Name must be under 50 characters',
        'author.string' => 'Name of Author must have only alphabets',
        'pic1.between' => 'Size of 1st Pic must be less than 1 Mb',
        'pic1.image' => '1st Pic is not an Image',
        'pic2.between' => 'Size of 2nd Pic must be less than 2 Mb',
        'pic1.image' => '2nd Pic is not an Image',
        'pic3.between' => 'Size of 1st Pic must be less than 3 Mb',
        'pic1.image' => '3rd Pic is not an Image',
        'pic4.between' => 'Size of 1st Pic must be less than 4 Mb',
        'pic1.image' => '4th Pic is not an Image',
        'pic5.between' => 'Size of 1st Pic must be less than 5 Mb',
        'pic1.image' => '5th Pic is not an Image',
        'pic6.between' => 'Size of 1st Pic must be less than 6 Mb',
        'pic1.image' => '6th Pic is not an Image',
        'publication_year.digits' => 'Invalid Publication Year',
        'no_of_pages.numeric' => 'No of Pages must be numeric',
        ];
    }
}
