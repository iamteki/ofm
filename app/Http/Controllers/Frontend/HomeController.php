<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can pass data to the view here
        $data = [
            'banners' => $this->getBanners(),
            'services' => $this->getServices(),
            'projects' => $this->getProjects(),
            'testimonials' => $this->getTestimonials(),
            'news' => $this->getLatestNews(),
        ];
        
        return view('frontend.pages.home.home', $data);
    }
    
    /**
     * Get banner data
     *
     * @return array
     */
    private function getBanners()
    {
        // This would typically come from a database
        return [
            [
                'title' => 'Showing <span>You the way</span> of Success',
                'description' => 'The moment, so blinded by desire, that they cannot foresee and trouble that are bound to ensue.',
                'image' => 'banner-1.jpg'
            ],
            [
                'title' => 'Business <span>& Individual</span> Consulting!..',
                'description' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled & demoralized.',
                'image' => 'banner-2.jpg'
            ],
            [
                'title' => 'Ideas for <span>Your Better</span> Investment!..',
                'description' => 'The moment, so blinded by desire, that they cannot foresee and trouble that are bound to ensue.',
                'image' => 'banner-3.jpg'
            ],
        ];
    }
    
    /**
     * Get services data
     *
     * @return array
     */
    private function getServices()
    {
        return [
            [
                'title' => 'Private Client Investment Management',
                'description' => 'That they cannot foresee the pain trouble that are bound ensue equal blame belongs to duty.',
                'icon' => 'flaticon-analytics',
                'link' => '#'
            ],
            [
                'title' => 'Institutional Investment Consulting',
                'description' => 'Power of choice is untrammelled when nothing prevent our being all to do what we like best.',
                'icon' => 'flaticon-office-building',
                'link' => '#'
            ],
            [
                'title' => 'Retirement Plan Consulting',
                'description' => 'Obligations of business it will occur that pleasures have to repudiaters and annoyances accepted.',
                'icon' => 'flaticon-retirement',
                'link' => '#'
            ],
        ];
    }
    
    /**
     * Get projects data
     *
     * @return array
     */
    private function getProjects()
    {
        return [
            [
                'title' => 'Investing in Emerging Markets',
                'category' => 'Business',
                'image' => 'project-1.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Revisiting Your Investment Goals',
                'category' => 'Investment',
                'image' => 'project-2.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Dimensional Fund Advisors Interview',
                'category' => 'Business',
                'image' => 'project-3.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Interested in Giving Back this year',
                'category' => 'Financial Plan',
                'image' => 'project-4.jpg',
                'link' => '#'
            ],
        ];
    }
    
    /**
     * Get testimonials data
     *
     * @return array
     */
    private function getTestimonials()
    {
        return [
            [
                'name' => 'Nathan Felix',
                'designation' => 'Director - Naxly Info tech',
                'title' => 'Great Experience!',
                'content' => 'I have been financially advised by counsolve investment Planners since 2022 I have had a very good experience. The sound financial advice they gave me helped me to achieve.',
                'image' => 'testimonial-1.png'
            ],
        ];
    }
    
    /**
     * Get latest news
     *
     * @return array
     */
    private function getLatestNews()
    {
        return [
            [
                'title' => 'Revisiting Your Investment & Distribution Goals',
                'category' => 'Investment',
                'date' => 'Mar 14, 2023',
                'author' => 'Justin Langer',
                'image' => 'news-1.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Dimensional Fund Advisors Interview with Director',
                'category' => 'Business',
                'date' => 'Feb 26, 2023',
                'author' => 'Colmin Neil',
                'image' => 'news-2.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Interested in Giving Back this year? Here are some tips',
                'category' => 'Financial Plan',
                'date' => 'Feb 05, 2023',
                'author' => 'Boone Gerardo',
                'image' => 'news-3.jpg',
                'link' => '#'
            ],
        ];
    }
}