<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Services\CommentService;


class CommentController extends Controller
{
    protected CommentService $service;
    public function __construct(CommentService $service){
        $this->service = $service;
    }

    public function store(CommentRequest $request ,$blogId)
    {
        $this->service->create($request->validated(),$blogId);
        return redirect()->route("frontend.blog.show",$blogId)->with("success" , "comment added successfuly");
    }
   public function destroy(Comment $comment)
{
    if ($this->service->delete($comment)) {
        return back()->with('success', 'Comment deleted');
    }

    return abort(403, 'Unauthorized action');
}


  
}
