<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'orders';
    protected $fillable = [
        'nama_pelanggan',
        'alamat_pelanggan',
        'no_telepon',
        'qty',
        'total_harga',
        'status',
    ];
}
