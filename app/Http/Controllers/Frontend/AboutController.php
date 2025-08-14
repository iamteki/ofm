<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index()
    {
        $data = [
            'stats' => $this->getStats(),
            'reasons' => $this->getReasons(),
            'skills' => $this->getSkills(),
            'industries' => $this->getIndustries(),
            'team' => $this->getTeamMembers(3), // Show 3 members on about page
        ];
        
        return view('frontend.pages.about.index', $data);
    }

    /**
     * Display the team page.
     */
    public function team()
    {
        $data = [
            'team' => $this->getTeamMembers(), // Get all team members
        ];
        
        return view('frontend.pages.about.team', $data);
    }

    /**
     * Get company statistics
     */
    private function getStats()
    {
        return [
            'founded' => '2015',
            'clients' => '500+',
            'offices' => '30+',
            'countries' => '16',
            'team_size' => '150+',
            'projects' => '1000+',
        ];
    }

    /**
     * Get reasons to choose us
     */
    private function getReasons()
    {
        return [
            [
                'number' => '01',
                'title' => 'Extensive <span>Knowledge</span>',
                'description' => 'Deep expertise in financial markets and investment strategies backed by years of experience.',
                'icon' => 'flaticon-knowledge'
            ],
            [
                'number' => '02',
                'title' => 'Risk <span>Management</span>',
                'description' => 'Comprehensive risk assessment and mitigation strategies to protect your investments.',
                'icon' => 'flaticon-shield'
            ],
            [
                'number' => '03',
                'title' => 'Team <span>Approach</span>',
                'description' => 'Collaborative expertise from our diverse team of financial professionals.',
                'icon' => 'flaticon-team'
            ],
            [
                'number' => '04',
                'title' => 'Advanced <span>Technology</span>',
                'description' => 'Cutting-edge financial tools and analytics for optimal investment decisions.',
                'icon' => 'flaticon-technology'
            ],
        ];
    }

    /**
     * Get skills data
     */
    private function getSkills()
    {
        return [
            'personal' => [
                'title' => 'Personal Consulting Service',
                'percentage' => 85,
                'description' => 'Tailored financial advice for individual clients and families.'
            ],
            'corporate' => [
                'title' => 'Corporate Consulting Service',
                'percentage' => 92,
                'description' => 'Strategic financial solutions for businesses and organizations.'
            ],
        ];
    }

    /**
     * Get industries served
     */
    private function getIndustries()
    {
        return [
            [
                'id' => 1,
                'title' => 'Technology & Life Sciences',
                'description' => 'Supporting innovation in tech and healthcare sectors with strategic financial guidance.',
                'points' => [
                    'Startup funding strategies',
                    'R&D investment optimization'
                ]
            ],
            [
                'id' => 2,
                'title' => 'Banking & Financial',
                'description' => 'Comprehensive solutions for financial institutions and banking services.',
                'points' => [
                    'Regulatory compliance',
                    'Risk management systems'
                ]
            ],
            [
                'id' => 3,
                'title' => 'Commercial Real Estate',
                'description' => 'Investment strategies for property development and real estate portfolios.',
                'points' => [
                    'Property valuation',
                    'Portfolio diversification'
                ]
            ],
            [
                'id' => 4,
                'title' => 'Manufacturing',
                'description' => 'Financial planning for manufacturing operations and supply chain management.',
                'points' => [
                    'Working capital optimization',
                    'Equipment financing'
                ]
            ],
        ];
    }

    /**
     * Get team members
     */
    private function getTeamMembers($limit = null)
    {
        $members = [
            [
                'id' => 1,
                'name' => 'Bertram Irvin',
                'position' => 'Chairman & CEO',
                'image' => 'assets/images/team/team-1.jpg',
                'bio' => 'He is Chairman and Chief Executive Officer of Online Finance Manager.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Marian Lenora',
                'position' => 'Chief Investment Officer',
                'image' => 'assets/images/team/team-2.jpg',
                'bio' => 'She is Chief Investment Officer of ETF in OFM from 2021.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 3,
                'name' => 'Herman Gordon',
                'position' => 'Senior Retirement Plan Consultant',
                'image' => 'assets/images/team/team-3.jpg',
                'bio' => 'He is Senior Retirement Plan Consultant of Online Finance Manager.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 4,
                'name' => 'Emily Rodriguez',
                'position' => 'Tax Planning Director',
                'image' => 'assets/images/team/team-1.jpg',
                'bio' => 'Expert in tax optimization strategies and compliance management.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 5,
                'name' => 'David Thompson',
                'position' => 'Risk Management Head',
                'image' => 'assets/images/team/team-2.jpg',
                'bio' => 'Specialized in risk assessment and mitigation strategies.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 6,
                'name' => 'Jessica Williams',
                'position' => 'Client Relations Manager',
                'image' => 'assets/images/team/team-3.jpg',
                'bio' => 'Ensuring exceptional client service and satisfaction.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 7,
                'name' => 'Robert Martinez',
                'position' => 'Portfolio Manager',
                'image' => 'assets/images/team/team-1.jpg',
                'bio' => 'Managing diverse investment portfolios for optimal returns.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 8,
                'name' => 'Amanda Foster',
                'position' => 'Financial Analyst',
                'image' => 'assets/images/team/team-2.jpg',
                'bio' => 'Providing detailed financial analysis and market insights.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 9,
                'name' => 'William Brown',
                'position' => 'Compliance Officer',
                'image' => 'assets/images/team/team-3.jpg',
                'bio' => 'Ensuring regulatory compliance and risk management.',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                    'linkedin' => '#'
                ]
            ],
        ];

        return $limit ? array_slice($members, 0, $limit) : $members;
    }
}