<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function emails()
    {
        return $this->belongsToMany(Email::class );
    }
}
