<?php

namespace App\Components\Component\Admin;

use Illuminate\Support\MessageBag;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class ComponentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $repo;
    private $component;
    private $baseView;

    function __construct(string $component, string $baseView, ComponentRepo $repo)
    {
        $this->component = $component;
        $this->baseView = $baseView;
        $this->repo = $repo;

        // Get message if any
        if (session()->has('message'))
            view()->share('message', session()->get('message'));
    }

    final protected function goBack(MessageBag $errors): \Illuminate\Routing\Redirector
    {
        return redirect()->back()
            ->withInput()
            ->withErrors($errors);
    }

    final protected function getView(string $view): string
    {
        return $this->baseView.'.'.$view;
    }

    final protected function getComponent(): string
    {
        return $this->component;
    }

    final protected function setTitle(string $title)
    {
        view()->share('title', "TWA - Admin - $title");
    }

    final protected function setHeading(string $heading)
    {
        view()->share('heading', $heading);
    }
}
