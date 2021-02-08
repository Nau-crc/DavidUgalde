<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'video',
        'docs'
    ];

    protected $hidden =[
        'pricing',
        'payday'
    ];

    public function image($image)
    {
        //
    }

    public function video($video)
    {
        //
    }

    public function docs($docs)
    {
        //
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function david()
    {
        return $this->belongsTo(David::class);
    }
}
