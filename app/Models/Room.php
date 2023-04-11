<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'space',
        'notes',
        'image',
    ];

      //Accessors image image_url
      public function getImageUrlAttribute()
      {
          if (!$this->image) {
              return 'https://www.firstcolonyfoundation.org/wp-content/uploads/2022/01/no-photo-available.jpeg';
          }
          if (Str::startsWith($this->image, ['http://', 'https://'])) {
              return $this->image;
          }
          return asset('storage/' . $this->image);
      }

}

