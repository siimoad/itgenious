<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;
class Annonce extends Model
{
    protected $table = "annonces";
    protected $primaryKey = "id";
    //
    public function formation()
    {
        return $this->hasOne(Formation::class, 'id', 'formation_id');
    }
}
