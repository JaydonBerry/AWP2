<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $table = 'jobs';
    protected $fillable  = ['username', 'title', 'description', 'contact_name','address', 'contact_number', 'img'];

    public function scopeSearch($query, $term)
	{
		$query->where('username', 'LIKE', "%$term%")
			->orWhere('title', 'LIKE', "%$term%")
			->orWhere('contact_name', 'LIKE', "%$term%")
			->orWhere('address', 'LIKE', "%$term%");
		return $query;
	}
}
