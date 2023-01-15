<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['user', 'category', 'room'];

    public function scopeFilter($query, array $filters)
    {

        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('specs', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('price', 'like', '%' . $filters['search'] . '%');
        // }

        // jika nilai bernilai true $filters['search'], maka jalankan function berikut ini, jika false ga usah jalanin

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('ukuranKamar', 'like', '%' . $search . '%')
                    ->orWhere('jumlahKasur', 'like', '%' . $search . '%')
                    ->orWhere('kamarMandi', 'like', '%' . $search . '%')
                    ->orWhere('wifi', 'like', '%' . $search . '%')
                    ->orWhere('ac', 'like', '%' . $search . '%')
                    ->orWhere('hiburan', 'like', '%' . $search . '%')
                    ->orWhere('price', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            // whereHas disini untuk join tabel
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['room'] ?? false, function ($query, $room) {
            // whereHas disini untuk join tabel
            return $query->whereHas('room', function ($query) use ($room) {
                $query->where('slug', $room);
            });
        });
    }

    // untuk menghubungkan relasi antar tabel
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // setiap route mencarinya slug bukan berdasarkan id
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
