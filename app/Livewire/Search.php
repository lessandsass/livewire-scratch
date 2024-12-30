<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

class Search extends Component
{

    #[Validate('required')]
    public $searchText = '';
    public $results = [];
    public $placeholder;

    public function updatedSearchText($value)
    {
        $this->reset('results');
        $this->validate();
        $searchTerm = "%{$value}%";
        $this->results = Article::where('title', 'like', $searchTerm)->get();
    }

    #[On('search:clear-results')]
    public function clear()
    {
        $this->reset('searchText', 'results');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
