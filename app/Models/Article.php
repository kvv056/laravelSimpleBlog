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
	
	public function mismatch(User $user) : ?bool
	{
		if(isnull($this->deleted_at)){
			return null;
		}
		return $this->authors()->where('users.id', $user->id)->count() != 0;
	}
}
