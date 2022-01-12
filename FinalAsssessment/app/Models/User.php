<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //Letting the role table know about the eloquent relationship between user and roles
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
    
    //Accessor for Name to return first word in capital
    public function getNameAttributes($name){
        return ucwords($name);        
    }

    //Mutator for encrypting password
    public function setPasswordAttribute($password){
        $this->attributes['password']= bcrypt($password);
    }
    
    /**
     * Check if the user has a role
     * @param string $role
     * @return bool
     */
    public function hasAnyRole(string $role){
        return null !==$this->roles->where ('name',$role)->first();
    }

        /**
     * Check if the user has a given role
     * @param array $role
     * @return bool
     */
        public function hasAnyRoles(array $role){
            return null !==$this->roles->whereIn('name',$role)->first();
        }


}
