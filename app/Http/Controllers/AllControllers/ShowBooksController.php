<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\FilterRequest;
use App\Models\ModelCarti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowBooksController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data=$request->validated();

        $query = ModelCarti::query();

        if ($request->has('titlu')) {
            $query->where('titlu', 'like', '%' . $request->input('titlu') . '%');
        }

        $carti = $query->paginate($this->itemsPerpage);
        return view("/books", compact("carti"));
    }
}
