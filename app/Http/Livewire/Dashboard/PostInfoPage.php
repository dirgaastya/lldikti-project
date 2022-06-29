<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\PostInfo;
use Livewire\Component;

class PostInfoPage extends Component
{

    public $posts, $title, $desc, $post_id;
    public $isModalOpen = 0;

    

    public function create()
    {
        $this->resetCreateForm();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->title = '';
        $this->desc = '';
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);
    
        PostInfo::updateOrCreate(['id' => $this->post_id], [
            'title' => $this->title,
            'desc' => $this->desc,
        ]);

        session()->flash('message', $this->post_id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $post = PostInfo::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->desc = $post->desc;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        PostInfo::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }

    public function render()
    {
        $this->posts = PostInfo::all();
        return view('livewire.dashboard.post-info-page')->layout('layouts.app',['pagetitle'=>'Post Info']);
    }
}
