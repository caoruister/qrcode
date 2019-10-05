<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    protected $fillable = [
        'image_url', 'short_code', 'short_url', 'target_url', 'status', 'style', 'title'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
