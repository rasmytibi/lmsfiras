<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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



    public function rules()
    {
        $id=$this->route('user');
        return [
            'current_password'=>'required',
            'new_password' => 'required|confirmed|min:6',
        ];
    }
}
