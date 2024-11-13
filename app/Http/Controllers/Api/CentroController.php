<?php

namespace App\Http\Controllers\Api;

use App\Models\Centro;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

use Illuminate\Http\Request;



class CentroController extends Controller
{
    use DisableAuthorization; //Para pruebas

    protected $model = Centro::class;
}