<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailEntry extends Model
{
    use HasFactory;

    protected $table = 'detail_entries';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'entry_id',
        'article_id',
        'quantity',
        'price',
    ];

    public function entry()
    {
        return $this->belongsTo(Entry::class, 'entry_id');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
