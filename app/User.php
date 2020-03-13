<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Product;

use App\Models\Photo;
use App\Models\Address;
use App\Models\Role;
use App\Models\Comment;
use App\Models\Coupon;
use App\Models\Order;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function photos(){

        return $this->hasMany(Photo::class);
    }

    public function addresses(){

        return $this->hasMany(Address::class);
    }
    public function roles()
    {

        return $this->belongsToMany(Role::class);
    }
    
    public function isAdmin(){

        if (isset($this->roles[0]) && $this->roles[0]->name == "مدیر") {

            return true;
        } else {

            return false;
        }
    }

    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public function coupons(){

        return $this->belongsToMany(Coupon::class);
    }

    public function orders(){

        return $this->hasMany(Order::class);
    }
}
