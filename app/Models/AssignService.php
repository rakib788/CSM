<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignService extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function AssignServiceDetails()
    {

        return $this->hasMany(AssignServiceDetails::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
