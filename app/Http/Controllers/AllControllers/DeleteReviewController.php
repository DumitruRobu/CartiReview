<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelReviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DeleteReviewController extends BaseController
{
    public function __invoke($id)
    {
        $reviewToDelete = ModelReviews::findOrFail($id);
        $reviewToDelete->delete();

        $idulCartii = request('idulCartii');
        $book = ModelCarti::findOrFail($idulCartii);
        $genulCartii = $book->genre->gen;
        $reviews = ModelReviews::where("carte_id", $book->id)->get();
        return view("/book", compact("book", "genulCartii", "reviews"));
    }
}
