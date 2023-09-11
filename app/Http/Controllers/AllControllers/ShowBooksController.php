<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ShowBooksController extends BaseController
{
    public function __invoke()
    {
        $carti = ModelCarti::all();
        return view("/books", compact("carti"));
    }
}
