<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Tool;

class SubmitAssessmentsRequest extends Request
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
        $tool = Tool::findOrFail(session('product.id'));

        $rules = [
            'fname'=>'required|min:3|max:255',
            'sname'=>'required|min:3|max:255',
            'email'=>'required|email',
            'company'=>'required|min:3|max:255',
            'title'=>'required|min:3|max:255',
            'country'=>'required',
            'phone'=>'required',
            'terms'=>'required'
        ];
        if(!empty($tool->extra_fields)){
            foreach($tool->extra_fields as $field) {
                if($field->required!=0){
                    $rules["extra.".$field->name] = ['required'];
                }
            }
        }
        
        return $rules;
    }
}
