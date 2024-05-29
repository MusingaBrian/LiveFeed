<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('feed', [
            'feeds' => Feed::orderBy('created_at', 'DESC')->paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $request->validateWithBag('feedErr', [
            'feed' => 'required|min:5|max:240',
        ]);

        $feeds = Feed::create([
            'content' => request()->get('feed', ''),
        ]);
        $feeds->save();

        return redirect()->route('feeds.index')->with('success', 'Feed was added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feed $feed)
    {
        return view('feeds.feed', compact('feed'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feed $feed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feed $feed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feed $feed)
    {
        $feed->delete();
        return redirect()->route('feeds.index')->with('success', 'Feed was Deleted Successfully!');
    }
}
