<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{

    public function index()
    {
        return view('app.tickets');
    }

    public function create()
    {
        return view('app.tickets.create');
    }

    public function store(Request $request)
    {
        $ticket_id = 0;
        return redirect(route('app.tickets.show', ['id' => $ticket_id]));
    }

    public function show(string $id)
    {
        return view('app.tickets.show');
    }

    public function edit(string $id)
    {
        return view('app.tickets.edit');
    }

    public function update(Request $request, string $id)
    {
        return redirect(route('app.tickets.edit', ['id' => $id]));
    }

    public function set_done(string $id)
    {
        return redirect()->back();
    }

    public function set_undone(string $id)
    {
        return redirect()->back();
    }

    public function create_comment(Request $request, $id)
    {
        $reply_to = $request->get('reply_to');
        
        return redirect(route('app.tickets.show', ['id' => $id]));
    }

}
