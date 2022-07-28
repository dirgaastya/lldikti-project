<?php

namespace App\Http\Livewire\Pages\PublicInfo;

use Livewire\Component;

class ProsedurStandar extends Component
{
    public function render()
    {
        return view('livewire.pages.public-info.prosedur-standar')->layout('layouts.guest', ['pagetitle' =>'Prosedur Operasional Standar']);
    }
}
