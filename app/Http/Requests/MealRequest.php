<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MealRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => ['required'],
            'timezone' => ['required'],
            'user' => ['required'],
            'menu' => ['required'],
            'image' => ['file',
                        'dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'],
        ];
    }
}
