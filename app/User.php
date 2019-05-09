<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; //Trait de softDeletes
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MyResetPassword;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes; //Para hacer una eliminación lógica

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    public function getIsAdminCHAttribute()
    {
        return $this->id_puesto==1;
    }

    public function getIsAuxCHAttribute()
    {
        return $this->id_puesto==2;
    }


}
