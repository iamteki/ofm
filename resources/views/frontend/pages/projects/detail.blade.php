{{-- resources/views/frontend/pages/projects/detail.blade.php --}}
@extends('frontend.layouts.app')

@section('title', $project['title'] . ' - Online Finance Manager')

@section('content')
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Project Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>
                    <li>{{ $project['title'] }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- project-details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.pages.projects.detail-sidebar')
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.pages.projects.detail-content')
                </div>
            </div>
        </div>
    </section>
    <!-- project-details end -->

    <!-- project-full-sections -->
    <section class="project-details-content" style="padding: 40px 0;">
        <div class="auto-container">
            <div class="content-two">
                <!-- Client Objectives Section -->
                <div class="single-item">
                    <div class="icon-box"><i class="flaticon-strategy"></i></div>
                    <h3>Client Objectives</h3>
                    <p>{{ $project['client_objectives'] ?? 'Our client approached us with specific financial management challenges that required innovative solutions and strategic planning.' }}</p>
                    <h5>Primary objectives included:</h5>
                    <ul class="list-item clearfix">
                        <li>Streamline financial operations and processes</li>
                        <li>Improve cost efficiency and resource allocation</li>
                        <li>Enhance financial reporting and transparency</li>
                        <li>Minimize operational risks and compliance issues</li>
                    </ul>
                </div>
                
                <!-- Project Goals Section -->
                <div class="single-item">
                    <div class="icon-box"><i class="flaticon-achievement"></i></div>
                    <h3>Project Goals</h3>
                    <p>{{ $project['project_goals'] ?? 'We established clear, measurable goals to ensure project success and client satisfaction throughout the engagement.' }}</p>
                    <h5>Key goals we focused on:</h5>
                    <ul class="list-item clearfix">
                        <li>Implement comprehensive financial management system</li>
                        <li>Achieve 30% improvement in operational efficiency</li>
                        <li>Establish robust monitoring and reporting frameworks</li>
                        <li>Deliver measurable ROI within the first quarter</li>
                    </ul>
                </div>
                
                <!-- Project Scope Section -->
                <div class="single-item">
                    <div class="icon-box"><i class="flaticon-development"></i></div>
                    <h3>Project Scope</h3>
                    <p>{{ $project['project_scope'] ?? 'Our comprehensive approach covered all aspects of financial management, from initial assessment to full implementation and ongoing support.' }}</p>
                    <h5>Scope of work included:</h5>
                    <ul class="list-item clearfix">
                        <li>Financial systems analysis and optimization</li>
                        <li>Process automation and workflow improvements</li>
                        <li>Staff training and knowledge transfer</li>
                        <li>Ongoing monitoring and performance evaluation</li>
                    </ul>
                </div>
                
                <!-- Results and Impact Section -->
                <div class="single-item">
                    <div class="icon-box"><i class="flaticon-money-growth"></i></div>
                    <h3>Results and Impact</h3>
                    <p>{{ $project['results_impact'] ?? 'The project delivered exceptional results, exceeding client expectations and establishing a foundation for continued growth and success.' }}</p>
                    <h5>Measurable outcomes achieved:</h5>
                    <ul class="list-item clearfix">
                        <li>35% reduction in operational costs</li>
                        <li>Improved financial accuracy by 95%</li>
                        <li>Enhanced decision-making capabilities</li>
                        <li>Strengthened compliance and risk management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- project-full-sections end -->

    @if(count($relatedProjects) > 0)
    <!-- related-projects -->
    @include('frontend.pages.projects.related-projects')
    <!-- related-projects end -->
    @endif

@endsection

@push('scripts')
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
@endpush