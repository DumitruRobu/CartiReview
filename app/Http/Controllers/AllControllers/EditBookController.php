<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelGenre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class EditBookController extends BaseController
{
    public function __invoke($id)
    {
        $carteaDeEditat = ModelCarti::findOrFail($id);
        $genulCartii = $carteaDeEditat->genre->gen;
        $toateGenurile = ModelGenre::all();
        return view("/edit", compact("carteaDeEditat", "genulCartii", "toateGenurile"));
    }
}
