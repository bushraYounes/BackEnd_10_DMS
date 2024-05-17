<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'path',
        'user_id'
    ];

    public function documents(){
        return $this->hasMany(Document::class);
    }
}
