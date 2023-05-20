<?php

namespace App\Repository\MerchantUserRepository;

use App\Models\MerchantUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UserRepository implements UserRepositoryInterface
{

    public function save(MerchantUser $model): MerchantUser
    {
        $model->save();
        return $model;
    }

    public function getByPhone(int $phone): ?MerchantUser
    {
       return MerchantUser::query()->where('phone', $phone)->first();
    }

    public function getUserMerchantById(int $id, MerchantUser $merchantUser)
    {
    return $merchantUser->merchants()->find($id);
    }
}
