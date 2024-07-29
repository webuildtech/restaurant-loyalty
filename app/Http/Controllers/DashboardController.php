<?php

namespace App\Http\Controllers;

use App\Models\GiftCard;
use App\Models\LoyaltyProgram;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGiftCards = GiftCard::count();
        $totalLoyaltyPrograms = LoyaltyProgram::count();

        return view('dashboard.index', compact('totalGiftCards', 'totalLoyaltyPrograms'));
    }
}
