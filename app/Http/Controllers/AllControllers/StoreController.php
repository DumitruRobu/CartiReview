<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelGenre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class StoreController extends BaseController
{
    public function __invoke()
    {
        // Validate the incoming request data
        $data = request()->validate([
            'titlu' => 'required|string',
            'autor' => 'required|string',
            'gen_id' => 'required|numeric',
            'imagine' => 'required|string',
            'descriere'=>'required|string'
        ]);

        $newBook = ModelCarti::create($data);

        $carti = ModelCarti::all();
        return view("/main", compact("carti"));
    }
}
