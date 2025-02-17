<?php

namespace App\Http\Livewire;

use App\Model\Subscription;
use Livewire\Component;

class FormSubsribtion extends Component
{
    public $email;
    public function subscribe()
    {
        $email = $this->validate([
            "email" => "required|email|string|unique:subscriptions,email"
        ]);

        Subscription::create($email);

        return session()->flash('success', 'Berhasil menjadi subriber');
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
