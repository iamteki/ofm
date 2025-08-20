<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display the pricing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get pricing plans data
        $data = [
            'pricing_plans' => $this->getPricingPlans(),
        ];
        
        return view('frontend.pages.pricing.index', $data);
    }
    
    /**
     * Get pricing plans data
     *
     * @return array
     */
    private function getPricingPlans()
    {
        // This would typically come from a database
        return [
            'monthly_plans' => [
                'basic' => [
                    'name' => 'Basic Package',
                    'description' => 'Pricing plan for small business',
                    'icon' => 'flaticon-idea',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management',
                        'Data Aggregation',
                        'Tax Planning & Preparation' => 'limited'
                    ],
                    'price' => [
                        'amount' => 49.99,
                        'currency' => '$',
                        'billing' => 'Billed Monthly'
                    ],
                    'is_popular' => false,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-two'
                ],
                'standard' => [
                    'name' => 'Standard Package',
                    'description' => 'Pricing plan for growing business',
                    'icon' => 'flaticon-star',
                    'discount_text' => '10% Discount, Start Today',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management',
                        'Data Aggregation',
                        'Tax Planning & Preparation'
                    ],
                    'price' => [
                        'amount' => 129.99,
                        'currency' => '$',
                        'billing' => 'Billed Monthly'
                    ],
                    'is_popular' => true,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-one'
                ],
                'pro' => [
                    'name' => 'Pro Package',
                    'description' => 'Pricing plan for enterprise',
                    'icon' => 'flaticon-diamond',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management',
                        'Data Aggregation',
                        'Tax Planning & Preparation'
                    ],
                    'price' => [
                        'amount' => 189.99,
                        'currency' => '$',
                        'billing' => 'Billed Monthly'
                    ],
                    'is_popular' => false,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-two'
                ]
            ],
            'onetime_plans' => [
                'starter' => [
                    'name' => 'Starter Package',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management'
                    ],
                    'price' => [
                        'amount' => 299.99,
                        'currency' => '$',
                        'billing' => 'One Time Payment'
                    ],
                    'is_popular' => false,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-two'
                ],
                'standard' => [
                    'name' => 'Standard Package',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management'
                    ],
                    'price' => [
                        'amount' => 899.99,
                        'currency' => '$',
                        'billing' => 'One Time Payment'
                    ],
                    'is_popular' => true,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-one'
                ],
                'basic' => [
                    'name' => 'Basic Package',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management'
                    ],
                    'price' => [
                        'amount' => 499.99,
                        'currency' => '$',
                        'billing' => 'One Time Payment'
                    ],
                    'is_popular' => false,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-two'
                ],
                'pro' => [
                    'name' => 'Pro Package',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management'
                    ],
                    'price' => [
                        'amount' => 1299.99,
                        'currency' => '$',
                        'billing' => 'One Time Payment'
                    ],
                    'is_popular' => false,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-two'
                ],
                'premium' => [
                    'name' => 'Premium Package',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management'
                    ],
                    'price' => [
                        'amount' => 1899.99,
                        'currency' => '$',
                        'billing' => 'One Time Payment'
                    ],
                    'is_popular' => false,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-two'
                ],
                'enterprise' => [
                    'name' => 'Enterprise Package',
                    'features' => [
                        'Traditional Consulting',
                        'Investment Management'
                    ],
                    'price' => [
                        'amount' => 2999.99,
                        'currency' => '$',
                        'billing' => 'One Time Payment'
                    ],
                    'is_popular' => false,
                    'button_text' => 'Get Started Now',
                    'button_class' => 'theme-btn btn-two'
                ]
            ]
        ];
    }
    
    /**
     * Get pricing FAQ data
     *
     * @return array
     */
    private function getPricingFAQ()
    {
        return [
            [
                'question' => 'Can I switch between monthly and one-time payment?',
                'answer' => 'Yes, you can choose your preferred payment method at any time. One-time payments offer better value for long-term commitments.'
            ],
            [
                'question' => 'What happens if I need to upgrade my plan?',
                'answer' => 'You can upgrade your plan at any time. We will prorate the charges based on your current billing cycle.'
            ],
            [
                'question' => 'Is there a money-back guarantee?',
                'answer' => 'Yes, we offer a 30-day money-back guarantee for all our pricing plans. No questions asked.'
            ],
        ];
    }
    
    /**
     * Handle pricing plan selection
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function selectPlan(Request $request)
    {
        $request->validate([
            'plan' => 'required|in:basic,standard,pro',
            'billing' => 'required|in:monthly,onetime'
        ]);
        
        $plan = $request->input('plan');
        $billing = $request->input('billing');
        
        // Store selection in session or redirect to payment
        session([
            'selected_plan' => $plan,
            'selected_billing' => $billing
        ]);
        
        // Redirect to contact page with plan info
        return redirect()->route('contact')->with([
            'message' => "You selected the {$plan} plan with {$billing} billing. Let's get you started!",
            'selected_plan' => $plan,
            'selected_billing' => $billing
        ]);
    }
}