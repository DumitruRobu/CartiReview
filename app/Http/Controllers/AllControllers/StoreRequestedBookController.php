<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\StoreRequest;
use App\Models\ModelCarti;
use App\Models\ModelReviews;
use App\Models\ModelSolicitaAdaugare;

class StoreRequestedBookController extends BaseController
{
    public function __invoke()
    {
        $data = request()->validate([
            'id'=>"required|numeric",
            'titlu'=>"required|string",
            'autor'=>"required|string",
            'gen_id'=>"required|numeric",
            'descriere'=>"required|string",
            'imagine'=>"required|string",
        ]);
        $idul = $data["id"];

        $recommendedBookToDelete = ModelSolicitaAdaugare::findOrFail($idul);
        $recommendedBookToDelete->delete();

        unset($data["id"]);
        $newBook = ModelCarti::firstOrCreate($data);
        return view("/main");

    }
}
