<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
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
        'mobile',
        'password',
        'tempPass'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
        'password', 'remember_token',
    ];
  

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function save( array $options = [] ) {
        if ( ! $this->exists && empty( $this->getAttribute( 'password','tempPass' ) ) ) {
            $this->tempPass = Str::random( 9 );
            $this->attributes['tempPass'] = $this->tempPass;
            $this->attributes['password'] = Hash::make( $this->attributes['tempPass'] );

        }
        return parent::save( $options );
    }

    

    // public function setPasswordAttribute( $value ) {
    //     if ( ! empty( $value ) ) {
    //         $this->attributes['tempPass'] = Hash::make( $value );
    //         $this->attributes['password'] = $this->attributes['tempPass'];
            
    //     }
    //     return parent::save( $value );
    // }
}
