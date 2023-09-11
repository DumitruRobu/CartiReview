<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DeleteBookController extends BaseController
{
    public function __invoke($id)
    {
        $bookToDelete = ModelCarti::findOrFail($id);
        $bookToDelete->delete();

        $carti = ModelCarti::all();
        return view("/books", compact("carti"));
    }
}
