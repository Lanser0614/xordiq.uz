<?php

namespace App\Providers;

use App\Models\MerchantUser;
use App\Models\Room;
use App\Repository\MerchantRepository\MerchantRepository;
use App\Repository\MerchantRepository\MerchantRepositoryInterface;
use App\Repository\MerchantUserRepository\MerchantMerchantUserRepository;
use App\Repository\MerchantUserRepository\MerchantUserRepositoryInterface;
use App\Repository\RoomRepository\RoomRepository;
use App\Repository\RoomRepository\RoomRepositoryInterface;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MerchantUserRepositoryInterface::class, MerchantMerchantUserRepository::class);
        $this->app->bind(MerchantRepositoryInterface::class, MerchantRepository::class);
        $this->app->bind(RoomRepositoryInterface::class, RoomRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::morphMap([
            'room' => Room::class,
            'merchant_user' => MerchantUser::class,
            'merchant' => MerchantRepositoryInterface::class,
        ]);
    }
}
