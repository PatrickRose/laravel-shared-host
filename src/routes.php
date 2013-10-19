<?php

if(Config::get('laravel-sharedhost::activated')) {

    Route::get('patrickrose-sharedhost-index',
               array('as' => 'patrickrose.sharedhost.index',
                function(){
                return View::make('laravel-sharedhost::artisanadmin');
            }
                ))->before('patrickrose.sharedauth');

    Route::get('patrickrose-sharedhost-install',
               array('as' => 'patrickrose.sharedhost.install',
                function() {
                Artisan::call("migrate");
                Artisan::call('db:seed');

                return Redirect::route('patrickrose.sharedhost.index')->with('notice', "Install complete. Don't forget to remove the access to this page");
            }
                ))->before('patrickrose.sharedauth');

    Route::get('patrickrose-sharedhost-migrate',
               array('as' => 'patrickrose.sharedhost.migrate',
                function() {
                Artisan::call("migrate");

                return Redirect::route('patrickrose.sharedhost.index')->with('notice', "Migration complete. Don't forget to remove the access to this page");
            }
                ))->before('patrickrose.sharedauth');

        Route::get('patrickrose-sharedhost-seed',
               array('as' => 'patrickrose.sharedhost.seed',
                function() {
                Artisan::call('db:seed');

                return Redirect::route('patrickrose.sharedhost.index')->with('notice', "Seed complete. Don't forget to remove the access to this page");
            }
                ))->before('patrickrose.sharedauth');


    
    Route::get('patrickrose/sharedhost/login',
               array('as' => 'patrickrose.sharedhost.loginform',
                function() {
                return View::make('laravel-sharedhost::login');
            }));

    Route::post('patrickrose/sharedhost/login',
                array('as' => 'patrickrose.sharedhost.login',
                 function() {
                $cookie = Cookie::make('patrickrosesharedhost', Input::get('password'), 5);
                return Redirect::route('patrickrose.sharedhost.index')->withCookie($cookie);;
            }
                 ));

}

?>
