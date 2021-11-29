<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";
    // protected $fillable = [
    //     'account_type',
    //     'contact_name',
    //     'company',
    //     'address',
    //     'city',
    //     'email',
    //     'password',
    //     'state',
    //     'zipcode',
    //     'w_number',
    //     'c_number',
    //     'o_number',
    //     'website',
    //     'notes',
    // ];
    protected $guarded = [];
}
