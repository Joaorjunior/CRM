<?php

namespace CRM\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'CRM\Repositories\ClientRepository',
            'CRM\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'CRM\Repositories\AddressRepository',
            'CRM\Repositories\AddressRepositoryEloquent'
        );

        $this->app->bind(
            'CRM\Repositories\QualificationRepository',
            'CRM\Repositories\QualificationRepositoryEloquent'
        );

        $this->app->bind(
            'CRM\Repositories\EmailRepository',
            'CRM\Repositories\EmailRepositoryEloquent'
        );

        $this->app->bind(
            'CRM\Repositories\PhoneRepository',
            'CRM\Repositories\PhoneRepositoryEloquent'
        );

        $this->app->bind(
            'CRM\Repositories\TicketRepository',
            'CRM\Repositories\TicketRepositoryEloquent'
        );

        $this->app->bind(
            'CRM\Repositories\LogRepository',
            'CRM\Repositories\LogRepositoryEloquent'
        );

        $this->app->bind(
            'CRM\Repositories\ContactRepository',
            'CRM\Repositories\ContactRepositoryEloquent'
        );


    }
}
