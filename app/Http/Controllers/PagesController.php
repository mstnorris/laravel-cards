<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome()
    {
        //$cards = Card::all();

        //return view('welcome', compact('cards'));

        return view('welcome');
    }
}
