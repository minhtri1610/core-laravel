<?php

namespace App\Repositories\AdminUser;

use App\Models\AdminUser;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use App\Repositories\AdminUser\AdminUserRepositoryInterface;

class AdminUserRepository extends BaseRepository implements AdminUserRepositoryInterface
{
    public function getModel()
    {
        return AdminUser::class;
    }
}