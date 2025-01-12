<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the homepage with the latest posts and most liked posts.
     */
    public function showHomepage(ViewFactory $viewFactory): View
    {
        $latestPosts = Post::orderBy('created_at', 'desc')
            ->paginate(50);

        $likedPosts = Post::withCount('likedUsers')
            ->orderBy('liked_users_count', 'desc')
            ->take(3)
            ->get();

        return $viewFactory->make('post.index', [
            'posts' => $latestPosts,
            'likedPosts' => $likedPosts,
        ]);
    }

    /**
     * Show a single post with related data.
     */
    public function show(Post $post, Request $request, ViewFactory $viewFactory): View
    {
        $date = Carbon::parse($post->created_at);
        $tags = $post->tags;

        // Fetch related posts based on shared categories or tags (if applicable)
        $relatedPosts = Post::whereHas('categories', function ($query) use ($post) {
            $query->whereIn('categories.id', $post->categories->pluck('id'));
        })
        ->where('id', '!=', $post->id)
        ->whereDate('published_at', '<=', Carbon::now())
        ->take(5)
        ->get();

        return $viewFactory->make('post.show', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
            'date' => $date,
            'tags' => $tags,
        ]);
    }

    /**
     * Show posts by a specific category.
     */
    public function byCategory(Category $category, ViewFactory $viewFactory): View
    {
        $posts = $category->posts()
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return $viewFactory->make('post.index', [
            'posts' => $posts,
            'category' => $category,
        ]);
    }

    /**
     * Search posts by a query string.
     */
    public function search(Request $request, ViewFactory $viewFactory): View
    {
        $query = $request->get('q');

        $posts = Post::whereDate('published_at', '<=', Carbon::now())
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                    ->orWhere('body', 'like', "%{$query}%");
            })
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return $viewFactory->make('post.search', [
            'posts' => $posts,
        ]);
    }
}
