<?php

namespace App\Http\Controllers\AllControllers;

use App\Http\Requests\AllControllers\UpdateBookRequest;
use App\Models\ModelCarti;
use App\Models\ModelGenre;
use Illuminate\Http\Request;

class UpdateBookController extends BaseController
{
    public function __invoke(UpdateBookRequest $request, $id)
    {
        $data = $request->validated();
        $this->service->updateBook($data, $id);

        return redirect()->route("ShowBook", ["id"=>$id]);

    }
}
