<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * All available services data
     */
    private function getServicesData()
    {
        return [
            'financial-planning' => [
                'slug' => 'financial-planning',
                'title' => 'Financial Planning & Advisory',
                'short_title' => 'Financial Planning',
                'icon' => 'flaticon-analytics',
                'image' => 'assets/images/service/service-8.jpg',
                'highlight' => 'Comprehensive financial planning services tailored to help you achieve your short-term and long-term financial goals with expert guidance from certified professionals.',
                'description' => 'Our financial planning service provides a holistic approach to managing your finances. We analyze your current financial situation, understand your goals, and create a personalized roadmap to help you achieve financial success.',
                'features' => [
                    [
                        'title' => 'Personal <span>Financial <br />Analysis</span>',
                        'description' => 'Comprehensive review of your current financial situation including income, expenses, assets, and liabilities.'
                    ],
                    [
                        'title' => 'Goal-Based <br /><span>Planning</span>',
                        'description' => 'Customized strategies aligned with your specific short-term and long-term financial objectives.'
                    ],
                    [
                        'title' => 'Cash Flow <span>Management</span>',
                        'description' => 'Optimize your income and expenses to maximize savings and achieve your financial goals faster.'
                    ],
                    [
                        'title' => 'Risk <span>Assessment</span>',
                        'description' => 'Identify and manage financial risks through proper insurance coverage and contingency planning.'
                    ]
                ],
                'is_featured' => true,
                'order' => 1
            ],
            'investment-management' => [
                'slug' => 'investment-management',
                'title' => 'Investment Management',
                'short_title' => 'Investment Management',
                'icon' => 'flaticon-office-building',
                'image' => 'assets/images/service/service-9.jpg',
                'highlight' => 'Professional portfolio management services designed to maximize returns while managing risk according to your investment objectives.',
                'description' => 'Our investment management service offers professional portfolio construction and ongoing management tailored to your risk tolerance and financial goals.',
                'features' => [
                    [
                        'title' => 'Portfolio <span>Construction</span>',
                        'description' => 'Build diversified portfolios using modern portfolio theory and strategic asset allocation.'
                    ],
                    [
                        'title' => 'Risk <br /><span>Management</span>',
                        'description' => 'Implement risk management strategies to protect your portfolio during market volatility.'
                    ],
                    [
                        'title' => 'Performance <span>Monitoring</span>',
                        'description' => 'Regular monitoring and reporting of portfolio performance against benchmarks and goals.'
                    ],
                    [
                        'title' => 'Rebalancing <span>Strategy</span>',
                        'description' => 'Systematic rebalancing to maintain optimal asset allocation and risk levels.'
                    ]
                ],
                'is_featured' => true,
                'order' => 2
            ],
            'tax-consulting' => [
                'slug' => 'tax-consulting',
                'title' => 'Tax Planning & Consulting',
                'short_title' => 'Tax Consulting',
                'icon' => 'flaticon-retirement',
                'image' => 'assets/images/service/service-10.jpg',
                'highlight' => 'Strategic tax planning and consulting services to minimize your tax liability while ensuring full compliance.',
                'description' => 'Our tax consulting service helps individuals and businesses navigate complex tax laws while maximizing tax efficiency.',
                'features' => [
                    [
                        'title' => 'Tax <span>Planning <br />Strategies</span>',
                        'description' => 'Proactive tax planning to minimize liability through deductions, credits, and timing strategies.'
                    ],
                    [
                        'title' => 'Compliance <br /><span>Management</span>',
                        'description' => 'Ensure full compliance with federal, state, and local tax regulations to avoid penalties.'
                    ],
                    [
                        'title' => 'Tax <span>Preparation</span>',
                        'description' => 'Professional preparation of individual and business tax returns with attention to detail.'
                    ],
                    [
                        'title' => 'Audit <span>Support</span>',
                        'description' => 'Expert representation and support in case of tax audits or inquiries from tax authorities.'
                    ]
                ],
                'is_featured' => true,
                'order' => 3
            ],
            'retirement-planning' => [
                'slug' => 'retirement-planning',
                'title' => 'Retirement Planning',
                'short_title' => 'Retirement Planning',
                'icon' => 'flaticon-retirement',
                'image' => 'assets/images/service/service-11.jpg',
                'highlight' => 'Comprehensive retirement planning to ensure a comfortable and secure retirement lifestyle.',
                'description' => 'Plan for your retirement with confidence through our comprehensive retirement planning services.',
                'features' => [
                    [
                        'title' => 'Retirement <span>Goals</span>',
                        'description' => 'Define clear retirement goals and create a roadmap to achieve them.'
                    ],
                    [
                        'title' => '401(k) <span>Optimization</span>',
                        'description' => 'Maximize your employer retirement benefits and contribution strategies.'
                    ],
                    [
                        'title' => 'Social Security <span>Planning</span>',
                        'description' => 'Optimize your Social Security claiming strategy for maximum benefits.'
                    ],
                    [
                        'title' => 'Income <span>Planning</span>',
                        'description' => 'Create sustainable retirement income streams from various sources.'
                    ]
                ],
                'is_featured' => false,
                'order' => 4
            ],
            'estate-planning' => [
                'slug' => 'estate-planning',
                'title' => 'Estate Planning',
                'short_title' => 'Estate Planning',
                'icon' => 'flaticon-knowledge',
                'image' => 'assets/images/service/service-12.jpg',
                'highlight' => 'Protect and preserve your wealth for future generations through comprehensive estate planning.',
                'description' => 'Ensure your assets are protected and distributed according to your wishes with our estate planning services.',
                'features' => [
                    [
                        'title' => 'Will & Trust <span>Planning</span>',
                        'description' => 'Create legally sound wills and trusts to protect your assets and beneficiaries.'
                    ],
                    [
                        'title' => 'Asset <span>Protection</span>',
                        'description' => 'Strategies to protect your assets from creditors and lawsuits.'
                    ],
                    [
                        'title' => 'Tax <span>Minimization</span>',
                        'description' => 'Minimize estate taxes through strategic planning and gifting strategies.'
                    ],
                    [
                        'title' => 'Legacy <span>Planning</span>',
                        'description' => 'Create a lasting legacy for your family and charitable causes.'
                    ]
                ],
                'is_featured' => false,
                'order' => 5
            ],
            'risk-management' => [
                'slug' => 'risk-management',
                'title' => 'Risk Management',
                'short_title' => 'Risk Management',
                'icon' => 'flaticon-shield',
                'image' => 'assets/images/service/service-13.jpg',
                'highlight' => 'Comprehensive risk assessment and management strategies to protect your financial future.',
                'description' => 'Identify, assess, and mitigate financial risks through comprehensive risk management strategies.',
                'features' => [
                    [
                        'title' => 'Insurance <span>Planning</span>',
                        'description' => 'Evaluate and optimize your insurance coverage for complete protection.'
                    ],
                    [
                        'title' => 'Risk <span>Assessment</span>',
                        'description' => 'Identify potential financial risks and vulnerabilities in your plan.'
                    ],
                    [
                        'title' => 'Emergency <span>Fund</span>',
                        'description' => 'Build and maintain adequate emergency reserves for unexpected events.'
                    ],
                    [
                        'title' => 'Liability <span>Protection</span>',
                        'description' => 'Strategies to protect your assets from potential liabilities.'
                    ]
                ],
                'is_featured' => false,
                'order' => 6
            ]
        ];
    }

    /**
     * Display the services listing page.
     */
    public function index()
    {
        $services = collect($this->getServicesData())
            ->sortBy('order')
            ->values()
            ->all();
        
        $featuredServices = collect($services)
            ->where('is_featured', true)
            ->take(3)
            ->values()
            ->all();
        
        return view('frontend.pages.services.index', compact('services', 'featuredServices'));
    }

    /**
     * Display a specific service detail page.
     */
    public function show($slug)
    {
        $servicesData = $this->getServicesData();
        
        if (!isset($servicesData[$slug])) {
            abort(404);
        }
        
        $service = $servicesData[$slug];
        
        // Add default process data if not present
        if (!isset($service['section_title'])) {
            $service['section_title'] = 'Our Approach';
            $service['section_subtitle'] = 'We follow a systematic approach to deliver exceptional results';
        }
        
        if (!isset($service['approach_items'])) {
            $service['approach_items'] = [
                [
                    'title' => 'Initial Consultation',
                    'description' => 'We begin with understanding your situation and goals through detailed discussions.'
                ],
                [
                    'title' => 'Analysis & Planning',
                    'description' => 'Comprehensive evaluation and strategy development tailored to your needs.'
                ],
                [
                    'title' => 'Implementation',
                    'description' => 'Execute the plan with precision and ongoing support.'
                ]
            ];
        }
        
        if (!isset($service['process_title'])) {
            $service['process_title'] = 'Our Process';
            $service['process_description'] = 'We follow a proven process to ensure the best outcomes for our clients.';
        }
        
        if (!isset($service['tabs'])) {
            $service['tabs'] = [
                [
                    'title' => 'Planning',
                    'content' => 'We start with comprehensive planning to understand your needs and develop customized strategies that align with your goals.'
                ],
                [
                    'title' => 'Execution',
                    'content' => 'Our team executes the plan with precision, ensuring all strategies are implemented effectively and efficiently.'
                ],
                [
                    'title' => 'Monitoring',
                    'content' => 'Continuous monitoring and adjustments to ensure your plan stays on track and adapts to changing circumstances.'
                ]
            ];
        }
        
        // Get all services for sidebar navigation
        $allServices = collect($servicesData)
            ->sortBy('order')
            ->values()
            ->all();
        
        return view('frontend.pages.services.detail', compact('service', 'allServices'));
    }
}