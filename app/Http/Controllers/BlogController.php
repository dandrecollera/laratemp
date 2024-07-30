<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function AddBlog(Request $request){

        $input = $request->input();

        DB::table('blog')
            ->insert([
                'image' => $this->imageHandler($request->file('image'), $input['title']),
                'title' => $input['title'],
                'content' => $input['content'],
                'category' => 'AH International',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

        return redirect('/adminblog');

    }

    public function imageHandler($input, $title){
        $photo = null;

        $destinationPath = 'public/blog';

        $image = $input;
        $extension = $image->getClientOriginalExtension();
        $filename = $title . '.' . $extension;
        $path = $image->storeAs($destinationPath, $filename);
        $photo = $filename;

        return $photo;
    }

    public function blogpage(Request $request){
        $query = $request->query();

        $data = array();

        $data['article'] = DB::table('blog')
            ->where('id', $query['id'])
            ->first();

        return view('blogpage', $data);
    }

    public function savePost(Request $request)
    {
        $content = $request->input();
        $file = $request->file('image');
        dd($file);
    }


    public function fetchblog(Request $request){
        $query = $request->query();

        $blogQuery = DB::table('blog')
            ->where('status', 'active')
            ->where('title', 'like', '%' . $query['title'] . '%');

        if (isset($query['categories']) && is_array($query['categories'])) {
            $blogQuery->whereIn('category', $query['categories']);
        }

        $blogresult = $blogQuery
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();
        foreach ($blogresult as $blog) {
            $blog->content = str_replace(['<br>', '<b>', '</b>', 'src', '</p>', '<p>'], [' ', '', '', '', '', ''], $blog->content);
            $blog->created_at_formatted = Carbon::parse($blog->created_at)->format('F j, Y');
            $blog->created_at_diff = Carbon::parse($blog->created_at)->diffForHumans();
        }

        return response()->json($blogresult);
    }
}
