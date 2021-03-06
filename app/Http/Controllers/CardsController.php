<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function getAllCards()
    {
        return Card::paginate(15);
    }
}
