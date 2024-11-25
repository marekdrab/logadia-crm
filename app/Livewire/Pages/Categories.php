<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $name;
    public $parent_id;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function createCategory()
    {
        $this->validate([
            'name' => 'required',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        Category::create([
            'name' => $this->name,
            'parent_id' => $this->parent_id,
        ]);

        $this->reset(['name', 'parent_id']);
        $this->categories = Category::all(); // Refresh categories
    }

    public function render()
    {
        return view('livewire.categories', [
            'categories' => Category::whereNull('parent_id')->with('children')->get(),
        ]);
    }
}
