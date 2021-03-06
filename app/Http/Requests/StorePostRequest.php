<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:255',
            'content' => 'required|min:3|max:1000',
            'pic' => 'required|mimes:png,jpg,gif,jpeg|max:2048',
        ];
    }
// custom errors 
    public function messages() {
        return [
            'title.required' => "The Post Title is required",
            'content.required' => "The Post Content is required",            
            'pic.required' => "PIc For this post is required",
        ];
    }

}
