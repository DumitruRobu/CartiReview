<?php

namespace App\Http\Controllers\AllControllers;

use App\Models\ModelCarti;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DeleteBookController extends BaseController
{
    public function __invoke($id)
    {
        try{
            $bookToDelete = ModelCarti::findOrFail($id);
            $bookToDelete->delete();

          //  $carti = ModelCarti::all(); //se poate si $carti = ModelCarti::paginate(10);
            $carti = ModelCarti::paginate(10);
            return redirect("/books")->with(["carti"=>$carti])->with("success", "Cartea stearsa!");

        } catch(ModelNotFoundException $e){
            return redirect("/main")->with("error", "Cartea nu a fost gasita!");
        }

    }
}
