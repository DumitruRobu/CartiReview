<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelSolicitaAdaugare extends Model
{
    use HasFactory;
    protected $table = "solicitaadaugare";
    protected $guarded = false;
    public $timestamps=false;
    use SoftDeletes;
    public function genre(){
        return $this->belongsTo(ModelGenre::class,  "gen_id", "id");
    }

}
