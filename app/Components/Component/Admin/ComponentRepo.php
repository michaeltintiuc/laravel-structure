<?php

namespace App\Components\Component\Admin;

use Illuminate\Database\Eloquent\Model;

abstract class ComponentRepo
{
    protected $model;
    private $component;
    private $perPage = 25;

    function __construct(string $component, Model $model)
    {
        $this->component = ['component' => $component];
        $this->model = $model;
    }

    final protected function getComponent(): array
    {
        return $this->component;
    }

    final protected function setPerPage(int $perPage)
    {
        $this->perPage = $perPage;
    }

    final protected function getPerPage(): int
    {
        return $this->perPage;
    }
}
