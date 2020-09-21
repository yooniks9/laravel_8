<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;
    public $info;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $info)
    {
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // DON'T NEED TO DO THIS !!!
        // return view('components.sidebar', [
        //     'list' => $this->list(),
        // ]);

        // Any public function you have inside your component can be invoked as vars
        return view('components.sidebar');
    }

    public function list($str)
    {
        return [
            'hi',
            'hello',
            'aloha',
            $str,
        ];
    }
}
