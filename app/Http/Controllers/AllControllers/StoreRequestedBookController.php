<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\StoreRequest;
use App\Http\Requests\AllControllers\StoreRequestedBookRequest;
use App\Models\ModelCarti;
use App\Models\ModelReviews;
use App\Models\ModelSolicitaAdaugare;

class StoreRequestedBookController extends BaseController
{
    public function __invoke(StoreRequestedBookRequest $request)
    {
        $data = $request->validated();
        $idul = $data["id"];

        $recommendedBookToDelete = ModelSolicitaAdaugare::findOrFail($idul);
        $recommendedBookToDelete->delete();

        unset($data["id"]);
        $book = ModelCarti::firstOrCreate($data);
        $idulCartiiNoiCreate = $book->id;

        return redirect()->route("ShowBook", ["id"=>$idulCartiiNoiCreate]);
    }
}
