<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "useranswer";

    // Relationship with shortcart
    function shortcuts_discovered() {
        return $this->hasOne(ShortcutsDiscovered::class,'user_id','user_id');
    }
}
