<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'title',
		'description',
		'start',
		'end', 
		'next',
		'previous',
		'thumbnail',
    ];
	
	public function events()
    {
        return $this->hasMany(\App\Model\Events::class, "id_character", "id_character");
    }
}
