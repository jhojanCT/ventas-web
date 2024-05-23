<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'user_id',
        'voucher_type',
        'voucher_series',
        'voucher_number',
        'date_time',
        'tax',
        'total',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Person::class, 'client_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detailSales()
    {
        return $this->hasMany(DetailSale::class, 'sale_id');
    }
}
