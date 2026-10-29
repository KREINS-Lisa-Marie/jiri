<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Implementation extends Model
{

    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'project_url',
        'contact_id',
        'homework_id',
    ];


    public function homework():BelongsTo
    {
        return $this->belongsTo(Homework::class);
    }
    public function contact():BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
    public function score():HasMany
    {
        return $this->hasMany(Score::class);
    }
}
