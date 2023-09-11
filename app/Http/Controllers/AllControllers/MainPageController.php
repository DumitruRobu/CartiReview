<?php

namespace App\Http\Controllers\AllControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainPageController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __invoke()
    {
        return view("/main");
    }
}