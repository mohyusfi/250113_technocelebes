<?php

namespace App\Http\Livewire;

use App\Model\Portofolio;
use Livewire\Component;
use Livewire\WithFileUploads;
class PortoCreate extends Component
{
    use WithFileUploads;
    public $title;
    public $picture;
    public $content;
    
    public function render()
    {
        return view('livewire.porto-create');
    }

    public function create(){
        $this->validate([
            'title' => 'required|string|max:255|',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string|max:20000'
        ]);

        $filepath = $this->picture->store('img', 'public');

        Portofolio::create([
            'title' => $this->title,
            'picture' => $filepath,
            'content' => $this->content
        ]);

        return redirect()->route('view-portofolio')->with('success', 'portofolio telah dibuat');
    }
}
