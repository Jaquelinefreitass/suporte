<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketRequest; // <- importar a Form Request

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

    // Aqui usa a Form Request
    public function store(StoreTicketRequest $request)
    {
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
