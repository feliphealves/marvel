<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'title',
		'description',
		'startYear',
		'endYear', 
		'rating',
		'thumbnail',
    ];
	
	public function series()
    {
        return $this->hasMany(\App\Model\Series::class, "id_character", "id_character");
    }
}
