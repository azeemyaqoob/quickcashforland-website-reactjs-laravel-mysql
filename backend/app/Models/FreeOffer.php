<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'phone',
        'email',
        'aquire_property',
        'state',
        'county',
        'city',
        'zip_code',
        'apn',
        'more_than_one_property',
        'vacant_land_in_different_state',
        'currently_live_in_different_state',
        'priority',
        'agree',
        'agree1',
    ];
}
