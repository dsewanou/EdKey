<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = $this->getLandingPageData();
        return view('pages.landing-page', $data);
    }

    public function contactUs()
    {
        $data = $this->getLandingPageData();
        return view('pages.contact-us', $data);
    }

    public function pricing()
    {
        $data = $this->getLandingPageData();
        return view('pages.pricing', $data);
    }

    public function apiData()
    {
        return response()->json($this->getLandingPageData());
    }

    private function getLandingPageData()
    {
        $backendUrl = config('services.backend.url', env('BACKEND_API_URL', 'http://localhost:8001/api'));

        try {
            $response = Http::get($backendUrl . '/landing-page');

            if ($response->successful()) {
                return $response->json();
            }
        } catch (\Exception $e) {
            // Fallback or log error
            report($e);
        }

        // Return empty structure or handle error
        return [
            'heroSlides' => [],
            'services' => [],
            'stats' => [],
            'portfolioCategories' => [],
            'portfolioItems' => [],
            'testimonials' => [],
            'pricingPlans' => [],
            'blogPosts' => [],
            'clients' => [],
        ];
    }
}
