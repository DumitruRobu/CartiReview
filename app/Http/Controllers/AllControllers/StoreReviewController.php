<?php

namespace App\Http\Controllers\AllControllers;


use App\Http\Requests\AllControllers\StoreReviewRequest;
use App\Models\ModelCarti;
use App\Models\ModelGenre;
use App\Models\ModelReviews;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class StoreReviewController extends BaseController
{
    public function __invoke(StoreReviewRequest $request)
    {
        // Validate the incoming request data
        $data = $request->validated();

        //Executam adaugarea reviewului in service!
        $result = $this->service->storeReview($data);


        //Extragem valorile pentru redirectionare!
        $book=$result['book'];
        $genulCartii=$result['genulCartii'];
        $reviews=$result['reviews'];
        return view("/book", compact("book", "genulCartii", "reviews"));
    }
}
