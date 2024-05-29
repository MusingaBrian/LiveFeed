<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{

    public function index()
    {
        $feeds = Feed::orderBy('created_at', 'DESC');

        if (request()->has('search')) {
            $feeds = $feeds->where('content', 'like', '%' . request()->get('search') . '%');
        }

        return view('feed', [
            'feeds' => $feeds->paginate(4),
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feed $feed)
    {
        return view('layout.edit', compact('feed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feed $feed)
    {
        $request->validateWithBag('contentErr', [
            'content' => 'required|min:5|max:240',
        ]);

        $feed->content = request()->get('content', '');
        $feed->save();

        return redirect()->route('feeds.index')->with('success', 'Feed was Updated Successfully!');
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
