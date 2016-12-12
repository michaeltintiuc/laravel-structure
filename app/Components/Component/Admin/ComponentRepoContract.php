<?php

namespace App\Components\Component\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ComponentRepoContract
{
    public function all(): Collection;
    public function paginate(): LengthAwarePaginator;
    public function find(int $id): Model;
    public function create(array $input): Model;
    public function update(int $id, array $input): Model;
    public function destroy(int $id): Model;
}
