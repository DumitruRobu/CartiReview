<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\StoreRequest;
use App\Http\Requests\AllControllers\UpdateBookRequest;
use App\Models\ModelCarti;
use App\Models\ModelGenre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UpdateBookController extends BaseController
{
    public function __invoke(UpdateBookRequest $request, $id)
    {
        $data = $request->validated();

        $book = ModelCarti::findOrFail($id);
        $book->update($data);

        return redirect()->route("ShowBook", ["id"=>$id]);

    }
}
