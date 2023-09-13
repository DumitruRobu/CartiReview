<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\StoreRequest;
use App\Models\ModelCarti;
use App\Models\ModelGenre;
use App\Models\ModelReviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        // Validate the incoming request data
        $data = $request->validated();

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


        $book = ModelCarti::where("id", $newBook->id)->first();
        $genulCartii = $book->genre->gen;
        $reviews = ModelReviews::where("carte_id", $book->id)->get();
        return view("/book", compact("book", "genulCartii", "reviews"));
    }
}
