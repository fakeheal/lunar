<?php

namespace Lunar\Hub\Http\Livewire\Components\Settings\Addons;

use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Addons\Manifest;

class AddonsIndex extends Component
{
    use WithPagination;

    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render(Manifest $manifest)
    {
        return view('adminhub::livewire.components.settings.addons.index', [
            'addons' => $manifest->addons(),
        ])->layout('adminhub::layouts.base');
    }
}
