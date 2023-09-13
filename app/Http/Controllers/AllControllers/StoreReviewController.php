<?php

namespace App\Http\Controllers\AllControllers;


use App\Http\Requests\AllControllers\StoreReviewRequest;
use App\Models\ModelCarti;
use App\Models\ModelGenre;
use App\Models\ModelReviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class StoreReviewController extends BaseController
{
    public function __invoke(StoreReviewRequest $request)
    {
        // Validate the incoming request data
        $data = $request->validated();

        $recenzia = $data['recenzie'];
        $cartea = $data['idulCartii'];

        $semnatura = Auth::user();
        $semnaturaNume = $semnatura['name'];

        ModelReviews::firstOrCreate([
            "carte_id"=> $cartea,
            "recenzie"=>$recenzia,
            "semnatura"=>$semnaturaNume
        ]);

//        $carti = ModelCarti::all();
//        return view("/main", compact("carti"));

          $book = ModelCarti::where("id", $cartea)->first();
          $genulCartii = $book->genre->gen;
          $reviews = ModelReviews::where("carte_id", $book->id)->get();
          return view("/book", compact("book", "genulCartii", "reviews"));
    }
}
