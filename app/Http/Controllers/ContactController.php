<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact.index');
    }

    public function store(StoreContactRequest $request): RedirectResponse
    {
        try {
            ContactMessage::create([
                ...$request->validated(),
                'user_id' => auth()->id(),
            ]);

            session()->flash('success', 'Your message has been sent successfully. We will get back to you soon!');

            return back();
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong while sending your message. Please try again later.');

            return back()->withInput();
        }
    }
}
