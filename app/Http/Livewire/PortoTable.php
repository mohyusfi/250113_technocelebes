<?php

namespace App\Http\Livewire;

use App\Model\Portofolio;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class PortoTable extends Component
{
    public $portofolios; 
    public function render()
    {
        $this->portofolios = Portofolio::all();
        return view('livewire.porto-table', ['portofolios' => $this->portofolios]);
    }

    public function delete($id) {
        $data_delete = Portofolio::findOrFail($id);

        if ($data_delete->picture && Storage::exists($data_delete->picture)) {
            Storage::delete($data_delete->picture);
        }

        $data_delete->delete();
    }
}
