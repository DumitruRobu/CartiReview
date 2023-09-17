<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\FilterRequest;
use App\Models\ModelCarti;
use App\Models\ModelSolicitaAdaugare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowSolicitaAdaugareController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
//        $data=$request->validated();
        $query = ModelSolicitaAdaugare::query();

        if ($request->has('titlu')) {
            $query->where('titlu', 'like', '%' . $request->input('titlu') . '%')
                ->orWhere('autor', 'like', '%' . $request->input('titlu') . '%');
        }

        $carti = $query->paginate($this->itemsPerpage);
        return view("/vizualizamCereriAdaugare", compact("carti"));
    }
}
