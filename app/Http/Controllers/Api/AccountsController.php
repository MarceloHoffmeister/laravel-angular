<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;
    
    protected $model;    
    protected $relationships = ['bank'];

    public function __construct(\App\Account $model) {

        $this->model = $model;

    }
}
