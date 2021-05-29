<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageUpdate extends Model
{
    use HasFactory;

    protected $table = 'message_updates';

    public $timestamps = false;

    protected $fillable = [
        'update_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
