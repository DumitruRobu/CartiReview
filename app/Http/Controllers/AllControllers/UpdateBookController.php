<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use App\Models\ModelGenre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UpdateBookController extends BaseController
{
    public function __invoke($id)
    {
        $data = request()->validate([
            'titlu' => 'required|string',
            'autor' => 'required|string',
            'gen_id' => 'required|numeric',
            'imagine' => 'required|string',
            'descriere'=>'required|string'
        ]);

        $book = ModelCarti::findOrFail($id);
        $book->update($data);

        return redirect()->route("ShowBook", ["id"=>$id]);

    }
}
