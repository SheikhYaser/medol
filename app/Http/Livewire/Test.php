<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Test extends Component
{
    public $search = "";
    public $type = "";

    public function render()
    {
        $products = Product::orderBy("id", "desc");
        if (!empty($this->search)) {
            $products = $products
                ->where(function ($item) {
                    $item->where("name", "LIKE", "%" . $this->search . "%")
                        ->orWhere("model", "LIKE", "%" . $this->search . "%")
                        ->orWhere("price", "LIKE", "%" . $this->search . "%");
                });

        };

        if (!empty($this->type)) {
            $products = $products->where("type", $this->type);
        }
        $products = $products->get();

        return view('livewire.test', compact('products'));
    }

}
