<?php

namespace App\Models\Admin\Post;

use App\Models\Admin\Category\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'name' , 
        'slug', 
        'discription',
        'title' ,
        'file' , 
        'Price'  , 
        'viwe_count'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getBannerUrl()
    {
        return asset('images/banners/' . $this->banner);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
