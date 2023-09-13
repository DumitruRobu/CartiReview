<?php


namespace App\Services\Carti;


use App\Models\ModelCarti;
use App\Models\ModelReviews;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function store($data){
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

        return [
            'book' => $book,
            'genulCartii' => $genulCartii,
            'reviews' => $reviews,
        ];
    }

    public function storeReview($data){
        $recenzia = $data['recenzie'];
        $cartea = $data['idulCartii'];

        $semnatura = Auth::user();
        $semnaturaNume = $semnatura['name'];

        ModelReviews::firstOrCreate([
            "carte_id"=> $cartea,
            "recenzie"=>$recenzia,
            "semnatura"=>$semnaturaNume
        ]);

        $book = ModelCarti::where("id", $cartea)->first();
        $genulCartii = $book->genre->gen;
        $reviews = ModelReviews::where("carte_id", $book->id)->get();

        return [
            'book'=>$book,
            'genulCartii'=>$genulCartii,
            'reviews'=>$reviews,
        ];
    }

    public function updateBook($data, $id){
        $book = ModelCarti::findOrFail($id);
        $book->update($data);
    }
}
