<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'first_name',
        'last_name',
        'profile_img',
        'email',
        'user_id',
        'archived_at',
    ];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function attendances():HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    public function performances():HasMany
    {
        return $this->hasMany(Performance::class);
    }

    public function implementations():HasMany
    {
        return $this->hasMany(Implementation::class);
    }
}
