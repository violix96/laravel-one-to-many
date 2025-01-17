<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'languages',
        'slug',
        'type_id',
    ];

    public function type() // 1 categoria / singolare 
    {
        return $this->belongsTo(Type::class);
    }
}
 //dipendente

//  $post->category()
//  $post->category->Model 