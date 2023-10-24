<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'author',
        'isbn',
        'stock_quantity',
        'editors_id',
        'price'
    ];

    public function editora(){
        return $this->belongsTo(Editor::class, 'editors_id');
    }
}
