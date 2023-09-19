<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\InregistramSolicitareaRequest;
use App\Http\Requests\AllControllers\StoreRequest;
use App\Models\ModelCarti;
use App\Models\ModelReviews;
use App\Models\ModelSolicitaAdaugare;

class InregistramSolicitareaController extends BaseController
{
    public function __invoke(InregistramSolicitareaRequest $request)
    {

        // Validate the incoming request data
        $data = $request->validated();

        ModelSolicitaAdaugare::firstOrcreate($data);
        return view("/cerereSucces");
    }
}
