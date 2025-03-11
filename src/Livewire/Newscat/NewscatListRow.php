<?php

namespace Darvis\ModuleNews\Livewire\Newscat;

use Livewire\Component;
use Darvis\ModuleNews\Livewire\Newscat\NewscatTrait;
use Darvis\Manta\Traits\TableRowTrait;

class NewscatListRow extends Component
{
    use NewscatTrait;
    use TableRowTrait;

    public function render()
    {
        return view('module-news::livewire.newscat.newscat-list-row');
    }
}
