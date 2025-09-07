<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Свойства / методы, которые не должны использоваться в шаблоне компонента.
     *
     * @var array
     */
    //protected $except = ['type'];


    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $message,
    ) { }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    /**
     * Определяет, должен ли компонент отображаться
     */
    public function shouldRender(): bool
    {
        return 3 < 4;
    }

    public function formatAlert($value)
    {
        return $value;
    }
}
