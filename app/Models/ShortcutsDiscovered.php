<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortcutsDiscovered extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "shortcuts_discovered";

    function user_answer() {
        return $this->belongsTo(UserAnswer::class,'user_id','user_id');
    }
}
