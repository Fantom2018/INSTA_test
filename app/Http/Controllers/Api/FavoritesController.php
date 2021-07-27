<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function showUsers()
    {
        return User::all();
    }
}
