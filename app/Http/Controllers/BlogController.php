<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Admin - List posts
    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    // Admin - Create form
    public function create()
    {
        return view('admin.blog.create');
    }

    // Admin - Store post
    public function store(Request $request)
    {

        $request->merge([
    'is_published' => $request->has('is_published'),
]);


        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
            'is_published' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/blog_images', 'public');
        }

        $data['is_published'] = $request->has('is_published');

        BlogPost::create($data);

        return redirect()->route('admin.blog.index')->with('success', 'Post created!');
    }

    // Admin - Edit form
    public function edit(BlogPost $blogPost)
    {
        return view('admin.blog.edit', compact('blogPost'));
    }

    // Admin - Update post
    public function update(Request $request, BlogPost $blogPost)
    {
        $request->merge([
    'is_published' => $request->has('is_published'),
]);


        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
            'is_published' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blog_images', 'public');
        }

        $data['is_published'] = $request->has('is_published');

        $blogPost->update($data);

        return redirect()->route('admin.blog.index')->with('success', 'Post updated!');
    }

    // Admin - Delete post
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return back()->with('success', 'Post deleted.');
    }

    // Public - Show posts
    public function show()
    {
        $posts = BlogPost::where('is_published', true)->latest()->get();
        return view('blog.index', compact('posts'));
    }

//     public function showSingle(BlogPost $blogPost)
// {
//     return view('blog.single', compact('blogPost'));
// }

public function showSingle(BlogPost $post)
{
    return view('blog.single', ['blogPost' => $post]);
}


}
