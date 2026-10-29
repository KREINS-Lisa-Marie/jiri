<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Score extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'implementation_id',
        'contact_id',
        'score',
        'comment',
    ];


    public function implementation():BelongsTo
    {
        return $this->belongsTo(Implementation::class);
    }
    public function contact():BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
