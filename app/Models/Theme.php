<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = ['name'];

    public function topic()
    {
        return $this->hasMany(Topic::class);
    }
}
