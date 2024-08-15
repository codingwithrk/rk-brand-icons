<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkBrandIcons;

use Illuminate\View\Component;

class Icon extends Component
{
    public $name;

    public mixed $width;

    public mixed $height;

    public mixed $color;

    public function __construct($name, $width = 32, $height = 32, $color = null)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    public function render()
    {
        return view('rk-icons::icons.' . $this->name, [
            'name' => $this->name,
            'width' => $this->width,
            'height' => $this->height,
            'color' => $this->color,
        ]);
    }
}