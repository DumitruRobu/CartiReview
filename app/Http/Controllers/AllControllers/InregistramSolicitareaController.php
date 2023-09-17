<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\StoreRequest;
use App\Models\ModelCarti;
use App\Models\ModelReviews;
use App\Models\ModelSolicitaAdaugare;

class InregistramSolicitareaController extends BaseController
{
    public function __invoke()
    {

        // Validate the incoming request data
        $data = request()->validate([
            "titlu"=>"required|string",
            "autor"=>"required|string",
            "descriere"=>"required|string",
            "gen_id"=>"required|numeric",
            "imagine"=>"required|string",
        ]);

        ModelSolicitaAdaugare::firstOrcreate($data);
        return view("/cerereSucces");
    }
}
