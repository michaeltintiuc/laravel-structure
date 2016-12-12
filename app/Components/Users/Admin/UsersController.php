<?php

namespace App\Components\Users\Admin;

use Illuminate\View\View;
use App\Components\Component\Admin\ComponentController;

class UsersController extends ComponentController
{
    function __construct(UsersRepo $repo)
    {
        parent::__construct('user', 'admin.users', $repo);
    }

    public function index(): View
    {
        $this->setTitle('All users');
        $this->setHeading('Users list');

        $users = $this->repo->all();

        return view($this->getView('index'))
            ->with(compact('users'));
    }

    public function create()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function show()
    {
        # code...
    }

    public function destroy(int $id)
    {
        # code...
    }

    public function destroyMultiple(array $ids)
    {
        # code...
    }
}
