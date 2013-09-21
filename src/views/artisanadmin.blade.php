<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Artisan Admin Page</title>
    </head>
    <body>
        <h1>Laravel Shared Host Admin Page</h1>

        @if (Session::has('notice'))
            <p>
                {{ Session::get('notice') }}
            </p>
        @endif
        <p>
            <strong>
                I TAKE NO RESPONSIBILITY FOR ANY PROBLEMS MADE BY
                THIS PAGE BEING LEFT ACCESSIBLE.
            </strong>
        </p>

        <p>
            <a href='{{ route('patrickrose.sharedhost.install') }}'>
                Click to run:</a>
            <ol>
                <li><pre>artisan migrate</pre></li>
                <li><pre>artisan db:seed</pre></li>
            </ol>
        </p>

        <p>
            <a href='{{ route('patrickrose.sharedhost.migrate') }}'>
                Click to run:</a>
            <ol>
                <li><pre>artisan migrate</pre></li>
            </ol>
        </p>

        <p>
            <a href='{{ route('patrickrose.sharedhost.seed') }}'>
                Click to run:</a>
            <ol>
                <li><pre>artisan db:seed</pre></li>
            </ol>
        </p>

    </body>
</html>
