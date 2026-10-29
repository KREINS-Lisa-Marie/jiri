<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Homework extends Model
{

    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'project_id',
        'jiri_id',
        'criteria_id',
        'weighting',
    ];

    public function project():BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
    public function jiri():BelongsTo
    {
        return $this->belongsTo(Jiri::class);
    }
    public function criteria():BelongsTo
    {
        return $this->belongsTo(Criteria::class);
    }
    public function implementations():HasMany
    {
        return $this->hasMany(Implementation::class);
    }
}
