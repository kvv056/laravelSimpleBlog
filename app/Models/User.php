<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'nickname',
        'name',
		'surname',
		'avatar',
		'phone',
		'sex',
        'email',
		'allowMailing',
        'password',
    ];
	
	public function getExperienceAttribute()
	{
		$currentTime = Carbon::now();
//		$startTime = Carbon::parse($this->created_at);
		$finishTime = Carbon::parse($this->created_at);

		$totalDuration = $finishTime->diffForHumans($currentTime);
		return $totalDuration;
	}
	
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
//		'created_at' => 'datetime'
    ];
	
	/**
     * The authors(users) that belong to the article.
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'users_articles');
    }
}
