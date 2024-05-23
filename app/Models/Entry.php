<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $table = 'entries';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'supplier_id',
        'user_id',
        'voucher_type',
        'voucher_series',
        'voucher_number',
        'date_time',
        'tax',
        'total',
        'status',
    ];

    public function supplier()
    {
        return $this->belongsTo(Person::class, 'supplier_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detailEntries()
    {
        return $this->hasMany(DetailEntry::class, 'entry_id');
    }
}
