<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Get all projects data
     */
    private function getProjectsData()
    {
        return [
            'emerging-markets-investment' => [
                'slug' => 'emerging-markets-investment',
                'title' => 'Investing in Emerging Markets',
                'category' => 'Investment',
                'client' => 'Global Finance Corp',
                'date' => 'March 15, 2024',
                'location' => 'New York, USA',
                'image' => 'assets/images/project/project-10.jpg',
                'gallery' => [
                    'assets/images/project/project-30.jpg',
                    'assets/images/project/project-31.jpg',
                    'assets/images/project/project-32.jpg',
                    'assets/images/project/project-33.jpg',
                ],
                'description' => 'Strategic investment planning for emerging markets with focus on risk management and portfolio diversification.',
                'full_description' => 'Our comprehensive approach to emerging market investments helped our client achieve substantial returns while managing risk effectively. We analyzed market trends, political stability, and economic indicators to create a balanced portfolio.',
                'challenges' => 'The main challenge was navigating volatile market conditions and regulatory uncertainties in emerging economies.',
                'solution' => 'We developed a diversified investment strategy with careful risk assessment and continuous monitoring systems.',
                'tags' => ['investment', 'innovative', 'business'],
                'featured' => true,
                'order' => 1
            ],
            'retirement-portfolio-optimization' => [
                'slug' => 'retirement-portfolio-optimization',
                'title' => 'Retirement Portfolio Optimization',
                'category' => 'Retirement Planning',
                'client' => 'Senior Living Solutions',
                'date' => 'February 28, 2024',
                'location' => 'Los Angeles, USA',
                'image' => 'assets/images/project/project-11.jpg',
                'gallery' => [
                    'assets/images/project/project-30.jpg',
                    'assets/images/project/project-31.jpg',
                ],
                'description' => 'Complete restructuring of retirement investment portfolios for optimal returns and security.',
                'full_description' => 'We helped our client restructure their retirement portfolio to ensure stable income streams while preserving capital for future generations.',
                'challenges' => 'Balancing growth potential with the need for stable, predictable income in retirement.',
                'solution' => 'Created a tiered investment approach with guaranteed income sources and growth-oriented investments.',
                'tags' => ['investment', 'business', 'management'],
                'featured' => true,
                'order' => 2
            ],
            'corporate-tax-restructuring' => [
                'slug' => 'corporate-tax-restructuring',
                'title' => 'Corporate Tax Restructuring',
                'category' => 'Tax Planning',
                'client' => 'Tech Innovations Inc',
                'date' => 'January 15, 2024',
                'location' => 'San Francisco, USA',
                'image' => 'assets/images/project/project-12.jpg',
                'gallery' => [
                    'assets/images/project/project-32.jpg',
                    'assets/images/project/project-33.jpg',
                ],
                'description' => 'Comprehensive tax planning and restructuring for maximum efficiency and compliance.',
                'full_description' => 'Our tax experts worked closely with the client to restructure their corporate tax strategy, resulting in significant savings while maintaining full compliance.',
                'challenges' => 'Complex multi-state tax obligations and international revenue streams.',
                'solution' => 'Implemented strategic entity restructuring and tax-efficient fund flows.',
                'tags' => ['consulting', 'business', 'management'],
                'featured' => true,
                'order' => 3
            ],
            'startup-funding-advisory' => [
                'slug' => 'startup-funding-advisory',
                'title' => 'Startup Funding Advisory',
                'category' => 'Business Consulting',
                'client' => 'Innovation Labs',
                'date' => 'December 10, 2023',
                'location' => 'Boston, USA',
                'image' => 'assets/images/project/project-13.jpg',
                'gallery' => [],
                'description' => 'Guided startup through Series A funding round with strategic financial planning.',
                'full_description' => 'We provided comprehensive financial advisory services to help this startup secure $10M in Series A funding.',
                'challenges' => 'Limited financial history and need for robust financial projections.',
                'solution' => 'Developed detailed financial models and investor presentation materials.',
                'tags' => ['consulting', 'innovative', 'business'],
                'featured' => false,
                'order' => 4
            ],
            'estate-planning-family-office' => [
                'slug' => 'estate-planning-family-office',
                'title' => 'Family Office Estate Planning',
                'category' => 'Estate Planning',
                'client' => 'Private Family Office',
                'date' => 'November 20, 2023',
                'location' => 'Chicago, USA',
                'image' => 'assets/images/project/project-14.jpg',
                'gallery' => [],
                'description' => 'Comprehensive estate planning for high-net-worth family office.',
                'full_description' => 'Created sophisticated estate planning strategies to preserve wealth across generations while minimizing tax implications.',
                'challenges' => 'Complex family dynamics and multiple jurisdiction considerations.',
                'solution' => 'Established trust structures and succession planning framework.',
                'tags' => ['consulting', 'investment', 'management'],
                'featured' => false,
                'order' => 5
            ],
            'merger-acquisition-advisory' => [
                'slug' => 'merger-acquisition-advisory',
                'title' => 'M&A Advisory Services',
                'category' => 'Business',
                'client' => 'Manufacturing Corp',
                'date' => 'October 5, 2023',
                'location' => 'Detroit, USA',
                'image' => 'assets/images/project/project-15.jpg',
                'gallery' => [],
                'description' => 'Financial advisory for strategic acquisition of competitor.',
                'full_description' => 'Provided comprehensive M&A advisory services including valuation, due diligence, and integration planning.',
                'challenges' => 'Complex valuation and integration challenges.',
                'solution' => 'Structured deal to maximize synergies and minimize integration risks.',
                'tags' => ['business', 'investment', 'management'],
                'featured' => false,
                'order' => 6
            ]
        ];
    }

    /**
     * Get project categories
     */
    private function getCategories()
    {
        return [
            'all' => 'View All',
            'business' => 'Business',
            'consulting' => 'Consulting',
            'innovative' => 'Innovative',
            'investment' => 'Investment',
            'management' => 'Management'
        ];
    }

    /**
     * Display projects listing page
     */
    public function index(Request $request)
    {
        $projects = collect($this->getProjectsData())
            ->sortBy('order')
            ->values()
            ->all();
        
        $categories = $this->getCategories();
        
        // Count projects per category
        $categoryCounts = [
            'all' => count($projects)
        ];
        
        foreach ($categories as $key => $label) {
            if ($key !== 'all') {
                $categoryCounts[$key] = collect($projects)->filter(function ($project) use ($key) {
                    return in_array($key, $project['tags']);
                })->count();
            }
        }
        
        // Pagination setup (6 per page)
        $perPage = 6;
        $currentPage = $request->get('page', 1);
        $totalProjects = count($projects);
        $totalPages = ceil($totalProjects / $perPage);
        
        // Get projects for current page
        $paginatedProjects = array_slice($projects, ($currentPage - 1) * $perPage, $perPage);
        
        return view('frontend.pages.projects.index', compact(
            'projects',
            'paginatedProjects',
            'categories',
            'categoryCounts',
            'currentPage',
            'totalPages'
        ));
    }

    /**
     * Display project detail page
     */
    public function show($slug)
    {
        $projectsData = $this->getProjectsData();
        
        if (!isset($projectsData[$slug])) {
            abort(404);
        }
        
        $project = $projectsData[$slug];
        
        // Get related projects (same category, excluding current)
        $relatedProjects = collect($projectsData)
            ->filter(function ($p) use ($project, $slug) {
                return $p['slug'] !== $slug && 
                       !empty(array_intersect($p['tags'], $project['tags']));
            })
            ->take(3)
            ->values()
            ->all();
        
        return view('frontend.pages.projects.detail', compact('project', 'relatedProjects'));
    }
}