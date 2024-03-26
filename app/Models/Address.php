<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = [
        'street',
        'city',
        'province',
        'country',
        'postal code',

    ];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, "contact_id", "id");
    }
}

