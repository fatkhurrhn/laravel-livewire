<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ShowServicePage extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'ASC')->get();
        return view('livewire.show-service-page', [
            'services' => $services
        ]);
    }
}
