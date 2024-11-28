<?php

namespace App\Http\Controllers\Api;

use App\Models\Centro;
use Orion\Http\Controllers\RelationController;

class CentroUsersController extends RelationController
{
    protected $model = Centro::class;
    protected $relation = 'users';
}
