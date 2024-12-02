<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortafolioController extends Controller
{
    public function index(Request $request): View
    {
        $reservations = Reservation::paginate();

        return view('welcome', compact('reservations'));
    }
}
