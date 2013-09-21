<?php

Route::filter('patrickrose.sharedauth', function() {
    if (Cookie::has('patrickrosesharedhost')) {
        if (Cookie::get('patrickrosesharedhost') != Config::get('laravel-sharedhost::password')) {
	    die(var_dump(Config::get('app.key')));
            Cookie::forget('patrickrosesharedhost');
            return Redirect::route('patrickrose.sharedhost.login');
        }
    }
    else {
        return Redirect::route('patrickrose.sharedhost.login');
    }
});

?>
