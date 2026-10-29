<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'contact_id',
        'jiri_id',
        'role',
        'token',
    ];


    public function contact():BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
    public function jiri():BelongsTo
    {
        return $this->belongsTo(Jiri::class);
    }
}
