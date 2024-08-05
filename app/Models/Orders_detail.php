<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_detail extends Model
{
    use HasFactory;
    protected $table = 'Orders_detail';
    public $primaryKey = 'order_detail_id';
}
