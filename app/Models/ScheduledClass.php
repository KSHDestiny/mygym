<?php

namespace App\Models;

use App\Models\User;
use App\Models\ClassType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScheduledClass extends Model
{
    use HasFactory;

    public function instructor(){
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function classType(){
        return $this->belongsTo(ClassType::class);
    }
}
