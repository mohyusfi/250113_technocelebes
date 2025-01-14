<?php

namespace App\Http\Livewire;

use App\Model\Portofolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortoEdit extends Component
{
    use WithFileUploads;
    public $title;
    public $picture;
    public $content;
    public $id_porto;
    public $previewImage;
    public function mount($porto)
    {
        $this->title = $porto->title;
        $this->previewImage = $porto->picture;
        $this->content = $porto->content;
        $this->id_porto = $porto->id_porto;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255|',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string|max:20000'
        ]);

        $data_update = Portofolio::findOrFail($this->id_porto);

        if ($this->picture) {
            if ($data_update->picture && Storage::exists($data_update->picture)) {
                Storage::delete($data_update->picture);

                $filepath = $this->picture->store('img', 'public');
                $data_update->picture = $filepath;
            }
        }

        $data_update->title = $this->title;
        $data_update->content = $this->content;

        $data_update->update();

        return redirect()->route('view-portofolio')->with('success', 'portofolio telah diedit');
    }
    public function render()
    {
        return view('livewire.porto-edit');
    }

}
