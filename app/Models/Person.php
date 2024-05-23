<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'person_type',
        'name',
        'document_type',
        'document_number',
        'address',
        'phone',
        'email',
    ];

    public function entries()
    {
        return $this->hasMany(Entry::class, 'supplier_id');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class, 'client_id');
    }
}
