<?php
namespace App\Services;

use App\Models\Comment;

class CommentService
{
    public function create(array $data, int $blogId)
    {
        return Comment::create([
            'user_id' => auth()->id(),
            'blog_id' => $blogId,
            'content' => $data['content'],
        ]);
    }

    public function delete(Comment $comment): bool
    {
        if (auth()->user()->role === 'admin' || auth()->id() === $comment->user_id) {
            return (bool) $comment->delete();
        }
        return false;
    }
}
