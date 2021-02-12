<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateToolRequest extends FormRequest
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
            'company_id'=>'required_without:new_company|not_in:0',
            'new_company'=>'required_without:company_id',
            'title'=>'required',
            'gapropertyid'=>'required',
            'start_date'=>'required|date',
            'subdomain'=>'required',
            'domain'=>'required',
            'language'=>'required',
        ];
    }

    /**
     * Add custom messages to validation rules.
     * @return array
     */
    public function messages()
    {
        return [
            'new_company.required_without' => 'Please enter new company or select existing',
            'company_id.required_without' => 'Please select exiting company or enter new one',
            'company_id.not_in' => 'Please select exiting company or enter new one',
        ];
    }
}
