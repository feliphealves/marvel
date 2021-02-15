<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
	
	 protected $fillable = [
        'name',
        'description',
        'modified',
		'thumbnail',
    ];
	
	
	public function comics()
    {
        return $this->hasMany(\App\Models\Comics::class, "character_id", "id");
    }
	
	public function events()
    {
        return $this->hasMany(\App\Models\Events::class, "character_id", "id");
    }
	
	public function series()
    {
        return $this->hasMany(\App\Models\Series::class, "character_id", "id");
    }
	
	public function stories()
    {
        return $this->hasMany(\App\Models\Stories::class, "character_id", "id");
    }
}
