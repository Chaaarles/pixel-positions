<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs()->with(['tags', 'employer'])->get();

        return view('results', [
            'jobs' => $jobs,
        ]);
    }
}