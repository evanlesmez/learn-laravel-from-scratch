<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reply;
class Conversation extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies () {
        return $this->hasMany(Reply::class);
    }   
}