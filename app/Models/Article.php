<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'title',
		'text'
    ];
	
	/**
     * The authors(users) that belong to the article.
     */
    public function authors()
    {
        return $this->belongsToMany(User::class, 'users_articles');
    }
}
