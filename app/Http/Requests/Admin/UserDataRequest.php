<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserDataRequest extends FormRequest
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
            'name' => 'required|max:255',
            'identity_card' => 'required|min:16',
            'phone' => 'required|min:10',
            'room_number' => 'required|max:255',
            'checkin' => 'required|date',
            'duration' => 'required|max:255',
            'tagihan' => 'required|integer',
            'alamat' => 'required|max:255', 
            'RT' => 'required|max:3', 
            'RW' => 'required|max:3', 
            'kelurahan' => 'required|max:255',
            'kecamatan' => 'required|max:255', 
            'kabupaten' => 'required|max:255', 
            'provinsi' => 'required|max:255',
            'negara' => 'required|max:255',
            'checkout' => 'required|date',
        ];
    }
}
