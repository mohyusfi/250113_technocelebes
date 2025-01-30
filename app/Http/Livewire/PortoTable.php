<?php

namespace App\Http\Livewire;

use App\Model\Portofolio;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class PortoTable extends Component
{
    use WithPagination;

    public function render()
    {
        // $this->portofolios = Portofolio::all();
        return view('livewire.porto-table', [
            'portofolios' => Portofolio::paginate(4)
        ]);
    }

    public function delete($id) {
        $data_delete = Portofolio::findOrFail($id);

        if ($data_delete->picture && Storage::exists($data_delete->picture)) {
            Storage::delete($data_delete->picture);
        }

        $data_delete->delete();
        $currentPage = request()->query("page");
        $dataNow = Portofolio::paginate(4, ["*"], "page", $currentPage);
        if ($dataNow->isEmpty()) {
            $redirectPage = $currentPage > 1 ? $currentPage - 1 : 1;
            return redirect("/view-portofolio?page=$redirectPage");
        }
    }
}
