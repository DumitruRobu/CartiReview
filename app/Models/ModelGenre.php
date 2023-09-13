<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelGenre extends Model
{
    use HasFactory;
    protected $table = "genre";
    protected $guarded = false;
    public $timestamps=false;

    public function carti(){
        return $this->hasMany(ModelCarti::class,  "gen_id", "id");
    }
}
