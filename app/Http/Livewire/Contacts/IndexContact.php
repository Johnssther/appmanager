<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;

class IndexContact extends Component
{
    protected $listeners=['render' => 'render', 'deleteContact' => 'delete'];

    public function render()
    {
        $contacts = Contact::get();
        return view('livewire.contacts.index-contact', ['contacts' => $contacts]);
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
    }
}
