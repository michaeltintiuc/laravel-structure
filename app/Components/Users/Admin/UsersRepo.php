<?php

namespace App\Components\Users\Admin;

use App\Components\Users\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Components\Users\Admin\UsersRepoContract;
use App\Components\Component\Admin\ComponentRepo;

class UsersRepo extends ComponentRepo implements UsersRepoContract
{
    function __construct(User $model)
    {
        parent::__construct('user', $model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function paginate(): LengthAwarePaginator
    {
        return $this->model->paginate($this->getPerPage());
    }

    public function find(int $id): Model
    {
        //
    }

    public function create(array $input): Model
    {
        //
    }

    public function update(int $id, array $input): Model
    {
        //
    }

    public function destroy(int $id): Model
    {
        //
    }
}
