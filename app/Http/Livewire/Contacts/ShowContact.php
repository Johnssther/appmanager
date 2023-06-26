<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;

class ShowContact extends Component
{
    public $open = false;
    public $isEdit = false;
    public Contact $contact;

    protected $listeners=['showContact' => 'showContact'];

    protected $rules = [
        'contact.names' => 'required',
        'contact.surnames' => 'required',
        'contact.phone' => 'required',
        'contact.email' => 'required',
        'contact.description' => 'required',
        'contact.status' => 'required',
    ];

    public function render()
    {
        return view('livewire.contacts.show-contact');
    }

    public function mount()
    {
        $this->contact = new Contact();
        $this->contact->status = 1;
    }

    public function showContact(Contact $contact)
    {
        $this->contact = $contact;
        $this->open = true;
    }
}
