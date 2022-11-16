<?php

namespace App\Models;
use App\Models\Ward;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Santa extends Model
{
   use HasFactory;
   protected $fillable = [
    'name',
    'wards_id',
   
];
    public function wards()
    {
        return   $this->hasMany(Ward::class);
    }
}
