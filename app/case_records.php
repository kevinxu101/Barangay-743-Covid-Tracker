<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class case_records extends Model
{
    public function User(){
        return $this->belongsTo(User::class);

    }
}
