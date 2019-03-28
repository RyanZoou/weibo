<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Status extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
