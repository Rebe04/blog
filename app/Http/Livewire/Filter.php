<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Filter extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.filter', compact('categories'));
    }
}
