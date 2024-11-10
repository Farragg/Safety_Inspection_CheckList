<?php

namespace App\Http\Requests\Safety;

use Illuminate\Foundation\Http\FormRequest;

class SafetyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'floor' => 'required|boolean',
            'lighting' => 'required|boolean',
            'emergency' => 'required|boolean',
            'fireExtinguishers' => 'required|boolean',
            'trained' => 'required|boolean',
            'aidKits' => 'required|boolean',
            'contactNumbers' => 'required|boolean',
            'detectors' => 'required|boolean',
            'sprinklerSystem' => 'required|boolean',
            'evacuation' => 'required|boolean',
            'employeesAwareness' => 'required|boolean',
            'PPE' => 'required|boolean',
            'trainedPPE' => 'required|boolean',
            'trippingHazards' => 'required|boolean',
            'safePassage' => 'required|boolean',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'inspectorName' => 'required|string|max:255',
        ];
    }

//    public function messages()
//    {
//        // use trans instead on Lang
//        return [
//            'username.required' => Lang::get('userpasschange.usernamerequired'),
//            'oldpassword.required' => Lang::get('userpasschange.oldpasswordrequired'),
//            'oldpassword.max' => Lang::get('userpasschange.oldpasswordmax255'),
//            'newpassword.required' => Lang::get('userpasschange.newpasswordrequired'),
//            'newpassword.min' => Lang::get('userpasschange.newpasswordmin6'),
//            'newpassword.max' => Lang::get('userpasschange.newpasswordmax255'),
//            'newpassword.alpha_num' =>Lang::get('userpasschange.newpasswordalpha_num'),
//            'newpasswordagain.required' => Lang::get('userpasschange.newpasswordagainrequired'),
//            'newpasswordagain.same:newpassword' => Lang::get('userpasschange.newpasswordagainsamenewpassword'),
//            'username.max' => 'The :attribute field must  have under 255 chars',
//        ];
//    }
}
