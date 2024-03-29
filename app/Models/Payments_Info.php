<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments_Info extends Model
{
    use HasFactory;
    public function payment(){
        $this->belongsTo(User::class, 'user_id', 'id');
    }
}
