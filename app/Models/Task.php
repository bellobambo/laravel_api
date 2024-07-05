<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'priority'];


    public function user(){
        return $this->belongTo(User::class);
    }


    public function priority(){
        return $this->belongTo(Priority::class);

    }
}
