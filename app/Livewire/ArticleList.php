<?php

namespace App\Livewire;

// use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    public function render()
    {
        return view('livewire.article-list');
    }
}
