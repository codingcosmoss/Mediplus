<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function lists()  // Yangi aloqani qo'shish
    {
        return $this->hasMany(Lists::class);  // Agar 'lists' bo'lsa, u holda 'List' modelini o'rnatish
    }
}

