<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//以下追加
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'  //追加
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 以下追加
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    // dogsテーブルが持つuser_idからusersテーブルのレコードを1件参照される
    public function dog()
    {
        return $this->hasOne(Dog::class);
    }

    // 中間テーブルreservations経由で予約データを取得
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class)
            ->withPivot('reservation_date');

        // return $this->belongsToMany(User::class, 'reservations', 'user_id', 'dog_id')->withPivot('id', 'reservation_date');
    }

    // 中間テーブルfavorites経由で「いいね」した犬データを取得
    public function favorites()
    {
        return $this->belongsToMany(dog::class, 'favorites', 'user_id', 'dog_id')->withPivot('id');
    }
}
