<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Thumbnail;
use Storage;


class Developer extends Model
{
    protected $table = "developers";

    protected $appends = ['photo_url'];

    public function getPhotoUrlAttribute() {
    	
    	$sizex = 255;
    	$sizey = 242;
    	$sizefolder = $sizex . "x" . $sizey . "_fit/"; 
	    if($this->photo != '' && Storage::disk('public')->exists("thumbs/" . $sizefolder . str_replace("\\", "/", $this->photo))) {
	        return asset('storage/'. "thumbs/" . $sizefolder . str_replace("\\", "/", $this->photo));
	    }else {
	    	if($this->photo != '' && Storage::disk('public')->exists(str_replace("\\", "/", $this->photo))) {
	    		Thumbnail::thumb(str_replace("\\", "/", $this->photo), $sizex, $sizey);
	        	return asset('storage/'. "thumbs/" . $sizefolder . str_replace("\\", "/", $this->photo));
	    	} else {
	    		return null;		
	    	}   	
	    }
    }
}
