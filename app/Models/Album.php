<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albums';
    protected $fillable = [
        'album_name',
        'artist_id',
    ];
    public function artists()
    {
        return $this->belongsTo(Artist::class);
    }
}
