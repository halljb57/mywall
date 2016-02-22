<?php

namespace App\Repositories\Role;

use App\Events\Role\Created;
use App\Repositories\EloquentDBRepository;
use App\Role;

class EloquentRole extends EloquentDBRepository implements RoleRepository
{
    /**
     * @var Role
     */
    protected $model;

    /**
     * EloquentRole constructor.
     * @param Role $model
     */
    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    /**
     * Create new system role.
     *
     * @param array $data
     * @return Role
     */
    public function create(array $data)
    {
        $role = Role::create($data);

        event(new Created($role));

        return $role;
    }

    /**
     * Update specified role.
     *
     * @param $id Role Id
     * @param array $data
     * @return Role
     */
    public function update($id, array $data)
    {

    }

    /**
     * Remove role from repository.
     *
     * @param $id Role Id
     * @return bool
     */
    public function delete($id)
    {

    }
}
