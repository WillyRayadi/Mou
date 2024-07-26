<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MouItem extends Model
{
    use HasFactory;

    protected $fillable = ['mou_id', 'products', 'quantity', 'product_size', 'product_color'];
}
