<html>

<head>
    <title>Tienda chong en laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css')}} ">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

{{--{!! Form::open(array('url' => 'foo/bar')) !!}--}}

{{--{!! Form::label('email', 'E-Mail Address') !!}--}}
{{--{!! Form::text('email', '') !!}--}}

{{--{!! Form::password('password') !!}--}}

{{--{!! Form::close() !!}--}}



<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            {!! Form::open(array('url' => 'foo/bar')) !!}
                {!! Form::text('email',null, array('placeholder'=>'Email')) !!}
                {!! Form::password('password') !!}
            {!! Form::button('Submit', array( 'type' => 'submit','class'=> 'btn btn-info btn-block login')) !!}
            {!! Form::close() !!}
        </div>
    </div>

</div>



</body>
</html>