<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddTrackerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasRole(['super','admin','client']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'order_number'=>'required|unique:jobs|min:10|max:11',
            'name'=>'required|min:5|max:255',
            'code'=>'required|min:10',
        ];
    }
}