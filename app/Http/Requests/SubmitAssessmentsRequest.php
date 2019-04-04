<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Tool;
use Illuminate\Support\Facades\Config;

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
            'fname'=>'required|min:2|max:255',
            'sname'=>'required|min:2|max:255',
            'email'=>'required|email',
            'company'=>'required|min:2|max:255',
            'title'=>'required|min:3|max:255',
            'country'=>'required',
            'phone'=>'required',
            'terms'=>'required'
        ];
        if (Config::has('baseline_'.session('product.id').'.overall.field_validation')) {
            $rules = config('baseline_'.session('product.id').'.overall.field_validation');
        }
        if (!empty($tool->extra_fields)) {
            foreach ($tool->extra_fields as $field) {
                if ($field->required!=0) {
                    $rules["extra.".$field->name] = 'required';
                }
            }
        }
        return $rules;
    }
}
