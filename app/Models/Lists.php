<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model {
    use HasFactory;

    protected $guarded = [];

    protected $table = 'lists';

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favorites() {
        return $this->hasMany(Favorites::class, 'list_id');
    }
}
