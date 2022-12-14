<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','family','melli_code',
        'gender','mobile','email','birthday',
        'job','password','password_confirmation',
        'address','avatar_path','role_id','rate',
        'user_id',
        ];
    public function courses()
    {
        return $this->hasMany(Course::class,'teacher_id');
    }
}
