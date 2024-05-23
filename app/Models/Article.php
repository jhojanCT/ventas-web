<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'code',
        'name',
        'sale_price',
        'stock',
        'description',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function detailEntries()
    {
        return $this->hasMany(DetailEntry::class, 'article_id');
    }

    public function detailSales()
    {
        return $this->hasMany(DetailSale::class, 'article_id');
    }
}
