<?php

namespace App;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
