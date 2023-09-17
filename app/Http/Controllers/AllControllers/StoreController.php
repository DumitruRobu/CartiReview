<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\StoreRequest;
use App\Models\ModelCarti;
use App\Models\ModelReviews;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        // Validate the incoming request data

        $data = $request->validated();

        // Folosesc metoda store din serviciu
        $result = $this->service->store($data);
        // Atribui valorile la variabile
        $book = $result['book'];
        $genulCartii = $result['genulCartii'];
        $reviews = $result['reviews'];

        return view("/book", compact("book", "genulCartii", "reviews"));
    }
}
