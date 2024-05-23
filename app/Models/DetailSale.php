<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSale extends Model
{
    use HasFactory;

    protected $table = 'detail_sales';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'sale_id',
        'article_id',
        'quantity',
        'price',
        'discount',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
