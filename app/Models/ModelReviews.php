<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelReviews extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $guarded = false;
    public $timestamps=false;

    public function carti(){
        return $this->belongsTo(ModelCarti::class,  "carte_id", "id");
    }
}
