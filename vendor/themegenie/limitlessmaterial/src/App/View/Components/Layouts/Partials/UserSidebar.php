<?php

namespace Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials;

use Themegenie\LimitlessMaterial\App\View\Components\LayoutComponent;


class UserSidebar extends LayoutComponent
{
    public function __construct()
    {
       
    }

    public function render()
    {
        return view('limitlessmaterial::components.layouts.partials.userSidebar');
    }
}
