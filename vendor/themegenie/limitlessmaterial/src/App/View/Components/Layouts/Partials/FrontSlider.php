<?php

namespace Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials;

use Themegenie\LimitlessMaterial\App\View\Components\LayoutComponent;


class FrontSlider extends LayoutComponent
{
    public $sliders;

    public function __construct($sliders)
    {
        $this->sliders = $sliders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('limitlessmaterial::components.layouts.partials.frontSlider');
    }
}