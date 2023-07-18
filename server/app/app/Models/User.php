<?php

namespace App\Models;

use App\Enums\Roles;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
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
        'password' => 'hashed',
    ];

    protected static function boot()
    {
        parent::boot();

        self::created(function (self $model) {
            $model->sendNotificationsToAdmins();
        });
    }

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'wishlist');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function photos()
    {
        return $this->hasMany(UserPhoto::class);
    }

    protected function sendNotificationsToAdmins()
    {
        $adminRole = Role::where('name', Roles::ADMINISTRATOR)->first();

        if (is_null($adminRole)) {
            return;
        }

        $adminUsers = User::where('id', $adminRole->user_id)->get();

        foreach ($adminUsers as $admin) {
            Notification::create([
                'message' => 'Новый пользователь зарегистрирован: ' . $this->username,
                'user_id' => $admin->id,
            ]);
        }
    }
}
