<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\FilterRequest;
use App\Models\ModelCarti;
use App\Models\ModelSolicitaAdaugare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowSolicitaAdaugareController extends BaseController
{
    public function __invoke()
    {
        $carti = ModelSolicitaAdaugare::all();
        return view("/vizualizamCereriAdaugare", compact("carti"));
    }
}
