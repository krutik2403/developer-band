<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Thumbnail;
use Storage;


class Band extends Model
{
    protected $table = "bands";

    protected $appends = ['logo_url'];

    public function getLogoUrlAttribute() {
    	
    	$sizex = 255;
    	$sizey = 242;
    	$sizefolder = $sizex . "x" . $sizey . "_fit/"; 
	    if($this->logo != '' && Storage::disk('public')->exists("thumbs/" . $sizefolder . str_replace("\\", "/", $this->logo))) {
	        return asset('storage/'. "thumbs/" . $sizefolder . str_replace("\\", "/", $this->logo));
	    }else {
	    	if($this->logo != '' && Storage::disk('public')->exists(str_replace("\\", "/", $this->logo))) {
	    		Thumbnail::thumb(str_replace("\\", "/", $this->logo), $sizex, $sizey);
	        	return asset('storage/'. "thumbs/" . $sizefolder . str_replace("\\", "/", $this->logo));
	    	} else {
	    		return null;		
	    	}   	
	    }
    }
}
