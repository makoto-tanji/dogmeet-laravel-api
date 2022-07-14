<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //以下追加
        // 飼い主権限より高い場合
        Gate::define('isHigherOwner', function($user) {
            return $user->role <= 5;
        });

        // 管理者権限
        Gate::define('isAdmin', function($user) {
            return $user->role === 1;
        });
    }
}
