<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createPeopleRequest extends FormRequest
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
          'first_name'=>'required',
          'last_name'=>'required',
          'email'=>'required',
          'type'=>'required',
          'card_holder'=>'required',
          'card_number'=>'required|numeric|max:999999999|min:100000000',
          'cvv2'=>'required|numeric|max:999|min:100',
          'month'=>'required',
          'year'=>'required',
          'street'=>'required',
          'city'=>'required',
          'state'=>'required',
          'zip'=>'required|numeric|max:999999|min:100000',
          'country'=>'required',
          'phone'=>'required|numeric|max:999999999|min:100000000',
          'check'=>'required',
        ];
    }
}
