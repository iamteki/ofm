<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display the FAQ page.
     */
    public function index()
    {
        $faqs = $this->getFaqData();
        $categories = $this->getCategories();
        
        return view('frontend.pages.faq.index', compact('faqs', 'categories'));
    }
    
    /**
     * Handle FAQ question submission.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'category' => 'required|string',
            'message' => 'required|string|min:10'
        ]);
        
        // Here you would typically save to database
        // For now, we'll just redirect with success message
        
        return redirect()->route('faq')
            ->with('success', 'Thank you for your question! We will get back to you soon.');
    }
    
    /**
     * Get FAQ data grouped by category
     */
    private function getFaqData()
    {
        return [
            'Management' => [
                [
                    'question' => 'What does Online Finance Manager do?',
                    'answer' => 'We provide comprehensive financial management services including investment planning, portfolio management, tax consulting, and retirement planning. Our expert team helps individuals and businesses achieve their financial goals through strategic planning and personalized solutions.',
                    'is_active' => true
                ],
                [
                    'question' => 'What industries do you specialize in?',
                    'answer' => 'We work with clients across various industries including technology, healthcare, real estate, manufacturing, and retail. Our diverse expertise allows us to provide tailored financial solutions that address industry-specific challenges and opportunities.',
                    'is_active' => false
                ],
                [
                    'question' => 'Can you guarantee financial growth?',
                    'answer' => 'While we cannot guarantee specific returns due to market volatility, we use proven strategies and risk management techniques to optimize your portfolio performance. Our track record shows consistent positive results for our long-term clients.',
                    'is_active' => false
                ],
                [
                    'question' => 'What makes your financial plans special?',
                    'answer' => 'Our plans are customized to each client\'s unique situation, goals, and risk tolerance. We combine cutting-edge financial analysis tools with personalized attention to create strategies that are both innovative and practical.',
                    'is_active' => false
                ],
                [
                    'question' => 'How do you assess risk tolerance?',
                    'answer' => 'We use a comprehensive assessment process that includes questionnaires, financial analysis, and personal consultations to understand your comfort level with risk and align your investments accordingly.',
                    'is_active' => false
                ]
            ],
            'Service' => [
                [
                    'question' => 'How long does financial planning take?',
                    'answer' => 'Initial financial planning typically takes 2-4 weeks, including consultation, analysis, and strategy development. Implementation and ongoing management continue throughout our partnership.',
                    'is_active' => false
                ],
                [
                    'question' => 'How do you price your services?',
                    'answer' => 'We offer flexible pricing options including flat fees, hourly rates, and asset-based fees. Pricing depends on the complexity of your needs and the services selected. We provide transparent pricing during your initial consultation.',
                    'is_active' => false
                ],
                [
                    'question' => 'What is your refund policy?',
                    'answer' => 'We offer a 30-day satisfaction guarantee for new clients. If you\'re not satisfied with our services within the first 30 days, we\'ll refund your initial consultation and planning fees.',
                    'is_active' => false
                ],
                [
                    'question' => 'Do you offer remote consultations?',
                    'answer' => 'Yes, we offer both in-person and remote consultations via video conferencing. This allows us to serve clients nationwide with the same level of personalized attention.',
                    'is_active' => false
                ],
                [
                    'question' => 'How often do you review portfolios?',
                    'answer' => 'We conduct quarterly portfolio reviews and provide monthly performance reports. Additional reviews are scheduled as needed based on market conditions or life changes.',
                    'is_active' => false
                ]
            ],
            'Investment' => [
                [
                    'question' => 'What is your minimum investment requirement?',
                    'answer' => 'Our minimum investment varies by service type. Financial planning services have no minimum, while portfolio management typically requires a minimum of $50,000 in investable assets.',
                    'is_active' => false
                ],
                [
                    'question' => 'What types of investments do you recommend?',
                    'answer' => 'We recommend diversified portfolios including stocks, bonds, ETFs, mutual funds, and alternative investments based on your goals and risk tolerance.',
                    'is_active' => false
                ],
                [
                    'question' => 'How do you handle market downturns?',
                    'answer' => 'We use strategic asset allocation and rebalancing techniques to manage risk during market volatility. Our focus on long-term goals helps clients stay disciplined during short-term market fluctuations.',
                    'is_active' => false
                ],
                [
                    'question' => 'Do you offer socially responsible investing?',
                    'answer' => 'Yes, we offer ESG (Environmental, Social, and Governance) investment options for clients who want their portfolios to reflect their values.',
                    'is_active' => false
                ]
            ],
            'Getting Started' => [
                [
                    'question' => 'How do I get started?',
                    'answer' => 'Simply contact us to schedule a free initial consultation. We\'ll discuss your financial goals, explain our services, and determine how we can help you achieve financial success.',
                    'is_active' => false
                ],
                [
                    'question' => 'What documents do I need to provide?',
                    'answer' => 'We typically need recent tax returns, investment statements, insurance policies, and estate planning documents. We\'ll provide a complete checklist during your initial consultation.',
                    'is_active' => false
                ],
                [
                    'question' => 'Is my information secure?',
                    'answer' => 'Yes, we use bank-level encryption and security protocols to protect your financial information. We are also bound by strict confidentiality agreements and regulatory requirements.',
                    'is_active' => false
                ],
                [
                    'question' => 'Can I change advisors if needed?',
                    'answer' => 'Yes, you can change advisors at any time. We\'ll ensure a smooth transition and provide all necessary documentation for the transfer.',
                    'is_active' => false
                ]
            ]
        ];
    }
    
    /**
     * Get service categories for the dropdown
     */
    private function getCategories()
    {
        return [
            'general' => 'General Inquiry',
            'financial-planning' => 'Financial Planning',
            'investment-management' => 'Investment Management',
            'tax-consulting' => 'Tax Consulting',
            'retirement-planning' => 'Retirement Planning',
            'estate-planning' => 'Estate Planning',
            'risk-management' => 'Risk Management'
        ];
    }
}