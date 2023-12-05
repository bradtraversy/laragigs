{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User's Requests</div>
                <div class="card-body">
                    @if (session(resent))
                    <div class="alert alert-success" role="alert">
                        {{ _("An email has been sent successfully.") }}
                    </div>

                    @endif
                    {!! content !!}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    {{ name }}
    {{ email }}
    {{ categeory }}
    {{ country }}
    {{ company }}
    {{ content }}

{{ $message->attach($pathToFIle) }}
</div>
</body>
</html>
