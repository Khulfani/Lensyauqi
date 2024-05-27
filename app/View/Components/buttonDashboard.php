<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class buttonDashboard extends Component
{
    public string $source;
    public string $title;
    public bool $isArticle = false;
    /**
     * Create a new component instance.
     */
    public function __construct($source, $title, $isArticle = false)
    {
        $this->source = $source;
        $this->title = $title;
        $this->isArticle = $isArticle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-dashboard');
    }
}
