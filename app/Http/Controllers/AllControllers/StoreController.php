<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelGenre;
use App\Models\ModelReviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

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
            'descriere'=>'required|string',
            'recenzie'=>'required',
        ]);

        $recenzia = $data['recenzie'];
        unset($data['recenzie']);
        $newBook = ModelCarti::firstOrCreate($data);

        $semnatura = Auth::user();
        $semnaturaNume = $semnatura['name'];

        ModelReviews::firstOrCreate([
            "carte_id"=>$newBook->id,
            "recenzie"=>$recenzia,
            "semnatura"=>$semnaturaNume
        ]);

        $carti = ModelCarti::all();
        return view("/main", compact("carti"));
    }
}
