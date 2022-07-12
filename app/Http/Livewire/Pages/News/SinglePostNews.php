<?php

namespace App\Http\Livewire\Pages\News;

use Livewire\Component;

class SinglePostNews extends Component
{
    public function render()
    {
        return view('livewire.pages.news.single-post-news')->layout('layouts.guest',['pagetitle'=>'Info']);
    }
}
