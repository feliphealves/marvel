<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'title',
        'issueNumber',
        'variantDescription',
		'description',
		'format',
		'pageCount',
		'textObjects',
		'resourceURI',
		'thumbnail',
    ];
	
	public function comics()
    {
        return $this->hasMany(\App\Models\Comics::class, "character_id", "character_id");
    }
}
