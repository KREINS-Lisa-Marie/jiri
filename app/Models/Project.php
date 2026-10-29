<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'state',
        'specifications',
        'project_information',
    ];



    public function homework():HasMany
    {
        return $this->hasMany(Homework::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
