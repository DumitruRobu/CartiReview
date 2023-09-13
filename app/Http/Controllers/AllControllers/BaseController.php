<?php


namespace App\Http\Controllers\AllControllers;


use App\Http\Controllers\Controller;
use App\Services\Carti\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service=$service;
    }
}
