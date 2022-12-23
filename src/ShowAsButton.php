<?php

namespace Lednerb\ActionButtonSelector;

trait ShowAsButton
{

    public function __construct()
    {
        return $this->showAsButton();
    }

    public function showAsButton($show = true)
    {
        return $this->withMeta(['showAsButton' => $show]);
    }
}
