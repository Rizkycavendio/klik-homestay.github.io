<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class CategoryController extends Controller
{
    public function index(Room $room)
    {
        return view('room', [
            'title' => $room->name,
            'posts' => $room->posts,
            'room' => $room->name
        ]);
    }
}
