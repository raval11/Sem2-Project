<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEventPayment extends Model
{
    use HasFactory;

    protected $table = "userpayment";
    protected $primarykey = 'id';
}
