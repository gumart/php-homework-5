<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'telegram_id',
        'message_update_id'
    ];

    public static function getUser($username)
    {
        $user = User::where('username', $username)->with('message_update')->get();

        if(count($user) != 0) {
            return $user;
        } else {
            return null;
        }
    }

    public function message_update()
    {
        return $this->hasOne(MessageUpdate::class);
    }
}
