<?php

namespace App\Http\Controllers;

use App\Models\GiftCard;
use Illuminate\Http\Request;

class GiftCardController extends Controller
{
    public function index()
    {
        $giftCards = GiftCard::all();
        return view('gift-cards.index', compact('giftCards'));
    }

    public function create()
    {
        return view('gift-cards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'restaurant_id' => 'required|exists:restaurants,id',
            'balance' => 'required|numeric|min:0',
            'expiry_date' => 'required|date'
        ]);

        GiftCard::create($request->all());

        return redirect()->route('gift-cards.index')->with('success', 'Gift card created successfully.');
    }

    public function show(GiftCard $giftCard)
    {
        return view('gift-cards.show', compact('giftCard'));
    }

    public function edit(GiftCard $giftCard)
    {
        return view('gift-cards.edit', compact('giftCard'));
    }

    public function update(Request $request, GiftCard $giftCard)
    {
        $request->validate([
            'balance' => 'required|numeric|min:0',
            'expiry_date' => 'required|date'
        ]);

        $giftCard->update($request->all());

        return redirect()->route('gift-cards.index')->with('success', 'Gift card updated successfully.');
    }

    public function destroy(GiftCard $giftCard)
    {
        $giftCard->delete();

        return redirect()->route('gift-cards.index')->with('success', 'Gift card deleted successfully.');
    }
}
