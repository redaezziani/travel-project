<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Like;

class LikeController extends Controller
{
    public function index()
    {
        $likes = Like::with('user', 'trip')->latest()->paginate(10);
        return view('admin.likes.index', compact('likes'));
    }

    public function destroy(Like $like)
    {
        $like->delete();
        return redirect()->route('admin.likes.index')->with('success', 'Like deleted successfully.');
    }
}
