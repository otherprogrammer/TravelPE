<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StackService;

class ReservationHistoryController extends Controller
{
    protected $stackService;

    public function __construct(StackService $stackService)
    {
        $this->stackService = $stackService;
    }

    public function addReservationToHistory(Request $request)
    {
        $this->stackService->push($request->reservation);

        return response()->json([
            'message' => 'Reserva añadida al historial',
            'stack' => $this->stackService->getStack()
        ]);
    }

    public function getReservationHistory()
    {
        return response()->json([
            'stack' => $this->stackService->getStack()
        ]);
    }

    public function removeLastReservation()
    {
        $removed = $this->stackService->pop();

        return response()->json([
            'message' => 'Última reserva eliminada del historial',
            'removed' => $removed,
            'stack' => $this->stackService->getStack()
        ]);
    }
}
