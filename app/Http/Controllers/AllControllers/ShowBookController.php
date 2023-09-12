<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelGenre;
use App\Models\ModelReviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ShowBookController extends BaseController
{
    public function __invoke($id)
    {
        $book = ModelCarti::findOrFail($id);
        $genulCartii = $book->genre->gen;

        $reviews = ModelReviews::where("carte_id", $id)->get();

        return view("/book", compact("book", "genulCartii", "reviews"));
    }
}
