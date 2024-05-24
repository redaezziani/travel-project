<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class ControllersCommentUsers extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
            'trip_id' => 'required|exists:trips,id',
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'trip_id' => $request->trip_id,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.trips.show', $request->trip_id)->with('success', 'Comment added successfully!');
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);  // Ensure the user is authorized to delete the comment

        $tripId = $comment->trip_id;
        $comment->delete();
        return redirect()->route('admin.trips.show', $tripId)->with('success', 'Comment deleted successfully!');
    }
}
