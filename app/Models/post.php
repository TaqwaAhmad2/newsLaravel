<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function cat()
    {
        return $this->belongsTo(category::class);
    }
    public function author_name()
    {
        return $this->belongsTo(Author::class);
    }


    use HasFactory;
}
