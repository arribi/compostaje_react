<?php

namespace App\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;
use Orion\Http\Requests\Request;

class CentroRequest extends Request
{
    public function storeRules(): array
    {
        return [
            'codigo' => 'required|string|max:2|unique:centros,codigo',
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'coordinador' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
