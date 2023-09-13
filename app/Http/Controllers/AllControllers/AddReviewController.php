<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelGenre;
use Illuminate\Http\Request;


class AddReviewController extends BaseController
{
    public function __invoke($id)
    {
        $cartea = ModelCarti::findOrFail($id);

        return view("/adaugamReview", compact("cartea"));
    }
}
