<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelCarti extends Model
{
    use HasFactory;
    protected $table = "carti";
    protected $guarded = false;
    public $timestamps=false;

    public function genre(){
        return $this->belongsTo(ModelGenre::class,  "gen_id", "id");
    }
}
