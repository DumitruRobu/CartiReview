<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowBooksController extends BaseController
{
    public function __invoke()
    {
        $carti = ModelCarti::all();
        return view("/books", compact("carti"));
    }
}
