<?php

namespace App\Components\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $hidden = ['password', 'remember_token'];
    protected $fillable = ['vendor_id', 'client_id', 'name', 'email', 'login', 'password', 'is_active'];

    public function setPasswordAttribute(string $value)
    {
        $value = trim($value);

        if ( ! empty($value))
            $this->attributes['password'] = bcrypt($value);
    }
}
