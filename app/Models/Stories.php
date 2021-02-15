<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'title',
		'description',
		'resourceURI',
		'type',
		'thumbnail',
    ];
	
	public function stories()
    {
        return $this->hasMany(\App\Model\Stories::class, "id_character", "id_character");
    }
}
