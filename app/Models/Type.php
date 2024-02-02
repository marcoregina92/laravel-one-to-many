<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
    ];

    public function portfolios() {
        return $this->hasMany(Portfolio::class);
    }

}
