<?php

namespace DocuSign\eSign;

use DocuSign\eSign\Client\ApiClient;
use Illuminate\Support\ServiceProvider;

class ESignServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $package_root = realpath(__DIR__.'/../')."/";

        // Publishing
		$this->publishes([
			$package_root.'config/docusign.php' =>  config_path('docusign.php'),
		], 'docusign');

        // Merge our configuration
		$this->mergeConfigFrom(
			$package_root.'config/docusign.php',
			'docusign'
		);

        $this->app->singleton(ApiClient::class, function () {
            return new ApiClient();
        });
    }
}
