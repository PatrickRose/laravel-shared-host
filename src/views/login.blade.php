<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Artisan Admin Login Page</title>
    </head>
    <body>
        <h1>Laravel Shared Host Login Page</h1>
    {{ Form::open(array('url' => route('patrickrose.sharedhost.login'))) }}

    <!-- password field -->
    <p>
      {{ Form::label('password', 'Password') }}<br/>
      {{ Form::password('password') }}
    </p>

    <p><em>Your password is your application key by default</em></p>

    <!-- submit button -->
    <p>{{ Form::submit('Login') }}</p>

    {{ Form::close() }}
    </body>
</html>
