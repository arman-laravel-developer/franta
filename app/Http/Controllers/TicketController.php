<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Ticket;
use App\Models\UserAuth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;

class TicketController extends Controller
{
    public function index()
    {
        $contests = Contest::where('status', 1)->latest()->get();
        return view('admin.ticket.index', compact('contests'));
    }

    public function show($id)
    {
        $contest = Contest::find($id);
        $tickets = Ticket::where('contest_code', $contest->code)->get();
        return view('admin.ticket.contest_wise_ticket', compact('tickets', 'contest'));
    }

    public function draw()
    {
        $draw_tickets = Ticket::where('draw_status', 'win')->orderBy('updated_at', 'desc')->get();
        // Get today's date
        $today = Carbon::now()->toDateString();

        // Get contests with today's date or expired dates
        $contests = Contest::where('status', 1)
            ->where(function ($query) use ($today) {
                $query->whereDate('draw_date', $today)
                    ->orWhereDate('draw_date', '<', $today);
            })
            ->where('draw_status', 'not_drawn')
            ->get();
        return view('admin.ticket.draw_tickets', compact('draw_tickets', 'contests'));
    }


    public function winner(Request $request)
    {
        $contest_code = $request->contest_code;
        $number_of_winner = $request->number_of_winner;
        $today = Carbon::now()->toDateString();

        // Get all tickets for the specified contest code with draw_status 'Pending'
        $tickets = Ticket::where('contest_code', $contest_code)
            ->where('draw_status', 'Pending')
            ->where('draw_date', null)
            ->get()
            ->toArray(); // Convert collection to array

//        foreach ($tickets as $ticket)
//        {
//            Ticket::where('id', $ticket['id'])->update(['draw_status' => 'Pending', 'draw_date' => null]);
//        }
//        return 'ok';

        // Shuffle the tickets array to randomize the order
        shuffle($tickets);

        // Select the winners and mark the rest as 'not_win'
        $winners = array_slice($tickets, 0, $number_of_winner);
        $notWinners = array_slice($tickets, $number_of_winner);

        // Update draw_status for the winners to 'Drawn'
        foreach ($winners as $winner) {
            Ticket::where('id', $winner['id'])->update(['draw_status' => 'win', 'draw_date' => $today]);
        }

        // Update draw_status for the not winners to 'not_win'
        foreach ($notWinners as $notWinner) {
            Ticket::where('id', $notWinner['id'])->update(['draw_status' => 'not_win', 'draw_date' => $today]);
        }

        $contest = Contest::where('code', $contest_code)->first();
        $contest->draw_status = 'drawn';
        $contest->save();

        // Send email to winners
        foreach ($winners as $winner) {
            // Assuming there's a relationship between Ticket and UserAuths models
            $user = UserAuth::find($winner['userAuth_id']); // Adjust the relationship name as per your actual setup
            $dataTicket['title'] = 'Congratulations';
            $dataTicket['logo'] = asset('/front/assets/images/logo.png');
            $dataTicket['email'] = $user->email;
            $dataTicket['ticket_no'] = $winner['ticket_no'];
            $dataTicket['contest_code'] = $winner['contest_code'];
            $dataTicket['draw_date'] = $today;
            if ($user) {
                // Send email to the user with winning ticket number(s)
                Mail::send('emails.winner-lottery', ['data' => $dataTicket], function ($message) use ($dataTicket) {
                    $message->to($dataTicket['email'])->subject($dataTicket['title']);
                });
            }
        }

        Alert::success('Drawn Successfully', '');
        return redirect()->back();
    }
}
