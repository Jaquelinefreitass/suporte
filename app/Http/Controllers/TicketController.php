<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'titulo' => 'required',
            'descricao' => 'required',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index')->with('success', 'Ticket criado com sucesso!');
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status' => 'required|in:Aberto,Em andamento,Resolvido',
        ]);

        $ticket->update($request->all());
        return redirect()->route('tickets.index')->with('success', 'Status atualizado!');
    }
}
