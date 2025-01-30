<?php

namespace App\Http\Livewire;

use App\Model\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleTable extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.article-table', [
            'articles' => Article::paginate(4)
        ]);
    }

    public function delete($id) {
        $data_delete = Article::findOrFail($id);

        if ($data_delete->picture && Storage::exists($data_delete->picture)) {
            Storage::delete($data_delete->picture);
        }

        $data_delete->delete();

        $currentPage = request()->query('page');
        $dataNow = Article::paginate(4, ['*'], 'page', $currentPage);
        if ($dataNow->isEmpty()) {
            $redirectPage = $currentPage > 1 ? $currentPage - 1 : 1;
            return redirect("/view-articles?page=$redirectPage");
        }
    }
}
