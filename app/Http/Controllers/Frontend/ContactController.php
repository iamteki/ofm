<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        $contactInfo = $this->getContactInfo();
        $offices = $this->getOffices();
        
        return view('frontend.pages.contact.index', compact('contactInfo', 'offices'));
    }

    /**
     * Handle contact form submission.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'message' => 'required|string|max:1000',
            'privacy_policy' => 'required|accepted',
        ]);

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Add to CRM, etc.
        
        // For now, just redirect with success message
        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    /**
     * Get contact information.
     */
    private function getContactInfo()
    {
        return [
            'phone' => [
                'finance' => '+1 (307) 533-7005',
            ],
            'email' => 'info@onlinefinancemanager.com',
            'address' => [
                'street' => '280 Granite Run Drive Suite',
                'city' => 'Hobert, LA 90010',
                'country' => 'United States',
            ],
            'hours' => 'Mon - Sat: 9am to 6pm',
            'social' => [
                'facebook' => '#',
                'twitter' => '#',
                'linkedin' => '#',
                'youtube' => '#',
            ]
        ];
    }

    /**
     * Get office locations.
     */
    private function getOffices()
    {
        return [
            [
                'name' => 'Head Office',
                'address' => '280 Granite Run Drive Suite, Hobert, LA 90010, USA',
                'phone' => '+41 888.22.333',
                'email' => 'head@onlinefinancemanager.com',
                'is_main' => true
            ],
            [
                'name' => 'New York Office',
                'address' => '123 Wall Street, New York, NY 10005, USA',
                'phone' => '+1 212.555.0123',
                'email' => 'ny@onlinefinancemanager.com',
                'is_main' => false
            ],
            [
                'name' => 'London Office',
                'address' => '45 Queen Street, London, EC4R 1BR, UK',
                'phone' => '+44 20.7123.4567',
                'email' => 'uk@onlinefinancemanager.com',
                'is_main' => false
            ],
        ];
    }
}