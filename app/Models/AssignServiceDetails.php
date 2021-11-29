<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignServiceDetails extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function assignServcie()
    {
        return $this->belongsTo(AssignServcie::class, 'assignService_id', 'id');
    }
    public function service()
    {
        return $this->belongsTo(service::class, 'service_id', 'id');
    }
}
