<?php

namespace Ecjia\App\Customer;

use Royalcms\Component\App\AppParentServiceProvider;

class CustomerServiceProvider extends  AppParentServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-customer', null, dirname(__DIR__));
    }
    
    public function register()
    {
        
    }
    
    
    
}