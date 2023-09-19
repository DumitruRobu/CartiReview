<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelReviews;
use App\Models\ModelSolicitaAdaugare;
use Illuminate\Http\Request;

class DeleteRequestController extends BaseController
{
    public function __invoke($id)
    {
        $requestToDelete = ModelSolicitaAdaugare::findOrFail($id);
        $requestToDelete->delete();

        return redirect()->route("ShowSolicitaAdaugare");
    }
}
