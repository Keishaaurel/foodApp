<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'name', 'price', 'description',  'categoryID'];

public function category()
{
    return $this->belongsTo(Category::class);
}

}
