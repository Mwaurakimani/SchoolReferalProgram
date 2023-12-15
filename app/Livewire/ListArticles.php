<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use MongoDB\Driver\Query;

class ListArticles extends Component
{
    use WithPagination;

    public $search;
    public $sort;

    public $order;

    protected $listeners = ['updateView' => '$refresh'];

    public function getArticles()
    {
        $articles = Article::whereNotNull('updated_at');

        if (isset($this->search)) {
            $articles->where('title', 'like', "%" . $this->search . "%");
        }

        if (isset($this->sort)) {
            if (isset($this->order)) {
                $articles->orderBy($this->sort,$this->order);
            } else {
                $articles->orderBy($this->sort,"asc");
            }
        }

        $articles = $articles->paginate(3);

        return $articles;
    }

    public function render()
    {
        $articles = $this->getArticles();
        return view('livewire.list-articles', [
            'articles' => $articles
        ]);
    }

    public function applyFilter()
    {
        $this->resetPage();
        $this->dispatch('updateView')->self();
    }
}
