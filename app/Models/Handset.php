<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handset extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(handset::class, 'handset_id');
    }
}
