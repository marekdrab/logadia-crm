<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\Material;
use Livewire\Component;
use Livewire\WithFileUploads;

class Materials extends Component
{
    use WithFileUploads;

    public $title;
    public $file;
    public $category_id;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function createMaterial()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:pdf',
            'category_id' => 'required|exists:categories,id',
        ]);

        $filePath = $this->file->store('materials');

        Material::create([
            'title' => $this->title,
            'file_path' => $filePath,
            'category_id' => $this->category_id,
        ]);

        $this->reset(['title', 'file', 'category_id']);
    }

    public function render()
    {
        return view('livewire.materials', [
            'categories' => $this->categories,
        ]);
    }
}
