<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembayaranRequest extends FormRequest
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
            'transactions_id' => 'integer|exists:transactions,id',
            'foto' => 'required|max:2048',
            'bank' => 'required|max:255',
            'nama' => 'required|max:255',
            'rekening' => 'required|integer',
            'tanggal_transfer' => 'required|date',
            'total' => 'required|integer'
        ];
    }
}
