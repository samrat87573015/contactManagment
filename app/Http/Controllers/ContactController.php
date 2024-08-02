<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, FlasherInterface $flasher)
    {
        $query = Contact::query();

        if ($request->has('search')) {
           $query->where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('sort_by')) {
            $sortDirection = $request->sort_direction == 'desc' ? 'desc' : 'asc';
            $query->orderBy($request->sort_by, $sortDirection);
        }



        $contacts = $query->get();
        return view('contact.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'phone' => 'numeric|nullable',
            'address' => 'nullable',
        ]);
        Contact::create($request->all());
        $flasher->addSuccess('Contact created successfully');
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact, FlasherInterface $flasher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email,'.$contact->id,
            'phone' => 'numeric|nullable',
            'address' => 'nullable',
        ]);

        $contact->update($request->all());
        $flasher->addSuccess('Contact updated successfully');
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact, FlasherInterface $flasher)
    {
        $contact->delete();
        $flasher->addSuccess('Contact deleted successfully');
        return redirect()->route('contacts.index');
    }
}
