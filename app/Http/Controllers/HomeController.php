<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\Contest;

class HomeController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $contests = Contest::where('status', 1)
            ->where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->where('draw_status', 'not_drawn')
            ->latest()
            ->get();
        $categories = Category::where('status', 1)->latest()->get();
        $latest_winners = Ticket::where('draw_status', 'win')->get();
        return view('front.home.home', compact('contests', 'categories', 'latest_winners'));

    }


    public function details($id)
    {
        $contest = Contest::find($id);
        return view('front.contest.details', compact('contest'));
    }

    public function allContest()
    {
        $now = Carbon::now();
        $contests = Contest::where('status', 1)
            ->where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->where('draw_status', 'not_drawn')
            ->latest()
            ->get();
        return view('front.contest.all', compact('contests'));
    }

    public function contact()
    {
        return view('front.contact.contact');
    }

    public function winner()
    {
        $latest_winners = Ticket::where('draw_status', 'win')->get();
        return view('front.winner.winner', compact('latest_winners'));
    }
}
