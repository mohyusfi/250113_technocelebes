<?php

namespace App\Http\Livewire;

use App\Model\Subsription;
use Livewire\Component;

class FormSubsribtion extends Component
{
    public $email;
    public function subscribe()
    {
        $email = $this->validate([
            "email" => "required|email|string|unique:subsribtion,email"
        ]);

        Subsription::create(['email' => $this->email]);

        return session()->flash('success', 'anda telah menjadi subriber');
    }
    public function render()
    {
        return view('livewire.form-subsribtion');
    }

    protected function messages(): array
    {
        return [
            'email.required' => ':attribute wajib di isi',
            'email.unique' => 'Anda telah menjadi subriber'
        ];
    }
}
