<?php

namespace Themegenie\LimitlessMaterial\App\View\Components\Layouts;

use Themegenie\LimitlessMaterial\App\View\Components\LayoutComponent;
use Themegenie\LimitlessMaterial\Contracts\ILayout;

class IndexMaster extends LayoutComponent implements ILayout
{
    public $sliders;
    public $news;

    public function __construct($sliders, $news)
    {
        $this->sliders = $sliders;
        $this->news = $news;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('limitlessmaterial::components.layouts.indexMaster');
    }
}