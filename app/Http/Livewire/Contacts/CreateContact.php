<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;

class CreateContact extends Component
{
    public $open = false;
    public $isEdit = false;
    public Contact $contact;

    protected $rules = [
        'contact.names' => 'required',
        'contact.surnames' => 'required',
        'contact.phone' => 'required',
        'contact.email' => 'required',
        'contact.description' => 'required',
        'contact.status' => 'required',
    ];

    protected $listeners=['editContact' => 'editContact'];

    public function render()
    {
        return view('livewire.contacts.create-contact');
    }

    public function mount()
    {
        $this->contact = new Contact();
        $this->contact->status = 1;
    }

    public function store()
    {
        $contact = new Contact();
        $contact = $this->contact;
        $contact->save();


        $this->contact = new Contact();

        $this->reset(['open']);
        $this->emitTo('contacts.index-contact', 'render');

    }

    public function editContact(Contact $contact)
    {
        $this->contact = $contact;
        $this->open = true;
        $this->isEdit = true;
    }

    public function closeModal() 
    {
        $this->contact = new Contact();
        $this->isEdit = false;
        $this->open = false;
    }
}
