<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowBooksController extends BaseController
{
    public function __invoke()
    {
        $query = ModelCarti::query();
        $carti = $query->paginate($this->itemsPerpage);
        return view("/books", compact("carti"));
    }
}
