<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function address(){
      return $this->belongsTo(Address::class);
    }

    public function types(){
      return $this->belongsToMany(Type::class);
    }

    public function subtypes(){
      return $this->belongsToMany(Subtype::class);
    }
}
