<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkBrandIcons;

class RkIconFactory
{
    public function make($name)
    {
        return view('rk-icons::icon', ['name' => $name])->render();
    }
}