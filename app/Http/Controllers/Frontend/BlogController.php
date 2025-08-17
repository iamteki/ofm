<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Get blog posts data
     */
    private function getBlogPosts()
    {
        return [
            [
                'id' => 1,
                'slug' => 'revisiting-investment-distribution-goals',
                'title' => 'Revisiting Your Investment & Distribution Goals',
                'excerpt' => 'Power choice untrammelled when nothing prevent to do what we like best.',
                'content' => 'Simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry\'s standard dummy text ever since the 2000...',
                'category' => 'Investment',
                'category_slug' => 'investment',
                'author' => 'Justin Langer',
                'author_slug' => 'justin-langer',
                'date' => 'Mar 14, 2023',
                'read_time' => '4 Mins Read',
                'image' => 'assets/images/news/news-4.jpg',
                'thumbnail' => 'assets/images/news/post-1.jpg',
                'tags' => ['Business', 'Consulting', 'Finance'],
                'is_featured' => true
            ],
            [
                'id' => 2,
                'slug' => 'dimensional-fund-advisors-interview',
                'title' => 'Dimensional Fund Advisors Interview with Director',
                'excerpt' => 'Able to do what we like best, every pleasure is to be welcomed and every pain avoided.',
                'content' => 'Obligations of business it will frequently occur pleasure have repudiated annoyances accept wise man...',
                'category' => 'Business',
                'category_slug' => 'business',
                'author' => 'Colmin Neil',
                'author_slug' => 'colmin-neil',
                'date' => 'Feb 26, 2023',
                'read_time' => '5 Mins Read',
                'image' => 'assets/images/news/news-5.jpg',
                'thumbnail' => 'assets/images/news/post-2.jpg',
                'tags' => ['Business', 'Interview', 'Management'],
                'is_featured' => true
            ],
            [
                'id' => 3,
                'slug' => 'giving-back-this-year-tips',
                'title' => 'Interested in Giving Back this year? Here are some tips',
                'excerpt' => 'The wise man therefore always holds in these matters to this principle of selection.',
                'content' => 'There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration...',
                'category' => 'Financial Plan',
                'category_slug' => 'financial-plan',
                'author' => 'Boone Gerardo',
                'author_slug' => 'boone-gerardo',
                'date' => 'Feb 05, 2023',
                'read_time' => '3 Mins Read',
                'image' => 'assets/images/news/news-14.jpg',
                'thumbnail' => 'assets/images/news/post-3.jpg',
                'tags' => ['Finance', 'Plans', 'Savings'],
                'is_featured' => true
            ],
            [
                'id' => 4,
                'slug' => 'market-crash-recovery-retirement',
                'title' => 'How to Recover from a Market Crash if You\'re Retired',
                'excerpt' => 'Strategic approaches to protect and rebuild your retirement portfolio after market downturns.',
                'content' => 'Market crashes can be particularly concerning for retirees who depend on their portfolios...',
                'category' => 'Retirement',
                'category_slug' => 'retirement',
                'author' => 'Sarah Mitchell',
                'author_slug' => 'sarah-mitchell',
                'date' => 'Jan 20, 2023',
                'read_time' => '6 Mins Read',
                'image' => 'assets/images/news/news-15.jpg',
                'thumbnail' => 'assets/images/news/post-4.jpg',
                'tags' => ['Retirement', 'Investment', 'Security'],
                'is_featured' => false
            ],
            [
                'id' => 5,
                'slug' => 'quarterly-earnings-report-analysis',
                'title' => 'Reports First Quarter 2023 Diluted EPS of $5.45',
                'excerpt' => 'Comprehensive analysis of Q1 2023 financial performance and market implications.',
                'content' => 'The first quarter results exceeded analyst expectations with strong performance across all segments...',
                'category' => 'Management',
                'category_slug' => 'management',
                'author' => 'Michael Chen',
                'author_slug' => 'michael-chen',
                'date' => 'Jan 15, 2023',
                'read_time' => '5 Mins Read',
                'image' => 'assets/images/news/news-16.jpg',
                'thumbnail' => 'assets/images/news/post-5.jpg',
                'tags' => ['Business', 'Management', 'Updates'],
                'is_featured' => false
            ],
            [
                'id' => 6,
                'slug' => 'technology-transforming-finance',
                'title' => 'How Technology is Transforming Financial Services',
                'excerpt' => 'Exploring the digital revolution in finance and its impact on traditional banking.',
                'content' => 'The financial services industry is undergoing a massive transformation driven by technology...',
                'category' => 'Technology',
                'category_slug' => 'technology',
                'author' => 'David Kumar',
                'author_slug' => 'david-kumar',
                'date' => 'Jan 10, 2023',
                'read_time' => '7 Mins Read',
                'image' => 'assets/images/news/news-17.jpg',
                'thumbnail' => 'assets/images/news/post-6.jpg',
                'tags' => ['Technology', 'Innovation', 'Finance'],
                'is_featured' => false
            ]
        ];
    }

    /**
     * Get blog categories
     */
    private function getCategories()
    {
        return [
            ['name' => 'Business', 'slug' => 'business', 'count' => 3],
            ['name' => 'Consulting', 'slug' => 'consulting', 'count' => 5],
            ['name' => 'Financial Plan', 'slug' => 'financial-plan', 'count' => 2],
            ['name' => 'Investment', 'slug' => 'investment', 'count' => 6],
            ['name' => 'Innovative', 'slug' => 'innovative', 'count' => 4],
            ['name' => 'Management', 'slug' => 'management', 'count' => 1],
        ];
    }

    /**
     * Get popular tags
     */
    private function getTags()
    {
        return [
            'Business', 'Consulting', 'Finance', 'Idea', 'Interview', 
            'Plans', 'Press', 'Retirement', 'Savings', 'Security', 'Updates'
        ];
    }

    /**
     * Display blog listing page
     */
    public function index(Request $request)
    {
        $posts = collect($this->getBlogPosts());
        $categories = $this->getCategories();
        $tags = $this->getTags();
        
        // Get featured posts for sidebar
        $popularPosts = $posts->where('is_featured', true)->take(3);
        
        // Pagination logic (simplified for demo)
        $page = $request->get('page', 1);
        $perPage = 8;
        $total = $posts->count();
        $totalPages = ceil($total / $perPage);
        
        $paginatedPosts = $posts->forPage($page, $perPage);
        
        return view('frontend.pages.blog.index', compact(
            'paginatedPosts',
            'categories',
            'tags',
            'popularPosts',
            'page',
            'totalPages'
        ));
    }

    /**
     * Display single blog post
     */
    public function show($slug)
    {
        $posts = collect($this->getBlogPosts());
        $post = $posts->firstWhere('slug', $slug);
        
        if (!$post) {
            abort(404);
        }
        
        // Get related data
        $categories = $this->getCategories();
        $tags = $this->getTags();
        $popularPosts = $posts->where('is_featured', true)
                             ->where('slug', '!=', $slug)
                             ->take(3);
        
        // Get previous and next posts
        $currentIndex = $posts->search(function ($item) use ($slug) {
            return $item['slug'] === $slug;
        });
        
        $prevPost = $currentIndex > 0 ? $posts[$currentIndex - 1] : null;
        $nextPost = $currentIndex < $posts->count() - 1 ? $posts[$currentIndex + 1] : null;
        
        // Author details
        $authorDetails = [
            'name' => $post['author'],
            'slug' => $post['author_slug'],
            'bio' => 'Denouncing pleasure & praising pain was born and will complete all account of the system & expound.',
            'image' => 'assets/images/news/author-1.jpg',
            'social' => [
                'facebook' => '#',
                'twitter' => '#',
                'linkedin' => '#',
                'instagram' => '#'
            ]
        ];
        
        return view('frontend.pages.blog.detail', compact(
            'post',
            'categories',
            'tags',
            'popularPosts',
            'prevPost',
            'nextPost',
            'authorDetails'
        ));
    }

    /**
     * Display posts by category
     */
    public function category($slug)
    {
        $posts = collect($this->getBlogPosts());
        $filteredPosts = $posts->where('category_slug', $slug);
        
        $categories = $this->getCategories();
        $category = collect($categories)->firstWhere('slug', $slug);
        
        if (!$category) {
            abort(404);
        }
        
        $tags = $this->getTags();
        $popularPosts = $posts->where('is_featured', true)->take(3);
        
        return view('frontend.pages.blog.category', compact(
            'filteredPosts',
            'category',
            'categories',
            'tags',
            'popularPosts'
        ));
    }

    /**
     * Display posts by tag
     */
    public function tag($tag)
    {
        $posts = collect($this->getBlogPosts());
        $filteredPosts = $posts->filter(function ($post) use ($tag) {
            return in_array($tag, $post['tags']);
        });
        
        $categories = $this->getCategories();
        $tags = $this->getTags();
        $popularPosts = $posts->where('is_featured', true)->take(3);
        
        return view('frontend.pages.blog.tag', compact(
            'filteredPosts',
            'tag',
            'categories',
            'tags',
            'popularPosts'
        ));
    }

    /**
     * Search blog posts
     */
    public function search(Request $request)
    {
        $query = $request->get('search');
        $posts = collect($this->getBlogPosts());
        
        $searchResults = $posts->filter(function ($post) use ($query) {
            return stripos($post['title'], $query) !== false || 
                   stripos($post['excerpt'], $query) !== false ||
                   stripos($post['content'], $query) !== false;
        });
        
        $categories = $this->getCategories();
        $tags = $this->getTags();
        $popularPosts = $posts->where('is_featured', true)->take(3);
        
        return view('frontend.pages.blog.search', compact(
            'searchResults',
            'query',
            'categories',
            'tags',
            'popularPosts'
        ));
    }
}