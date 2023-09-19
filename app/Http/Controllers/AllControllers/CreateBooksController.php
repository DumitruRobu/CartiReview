<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelGenre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Gate;

class CreateBooksController extends BaseController
{
    public function __invoke()
    {
        $toateGenurile = ModelGenre::all();
        return view("/create", compact("toateGenurile"));
    }
}
