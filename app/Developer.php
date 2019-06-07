<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Developer extends Model
{
    protected $table = "developers";

    protected $appends = ['photo_url'];

    public function getPhotoUrlAttribute() {
    	return asset('storage/' . str_replace("\\", "/", $this->photo));
    }
}
