<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];

    public function subtypes(){
      return $this->belongsToMany(Subtype::class);
    }
}
