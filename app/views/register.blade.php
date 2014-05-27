<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
 
    {{ Form::open(array('url' => 'register_action')) }}
 
 <p>
           
             {{ $errors }}
        </p>

        <p>Nick :</p>
 
        <p>{{ Form::text('nick') }}</p>
 
        <p>Email :</p>
 
        <p>{{ Form::text('email') }}</p>
        <p>roll :</p>
 
        <p>{{ Form::text('roll') }}</p>
 <p>Bio :</p>
 
        <p>{{ Form::text('bio') }}</p>
        
        <p>Password :</p>
 
        <p>{{ Form::password('password') }}</p>
 
        <p>Confirm Password :</p>
 
        <p>{{ Form::password('cpassword') }}</p>
 
        <p>{{ Form::submit('Submit') }}</p>
 
    {{ Form::close() }}
 
</body>
</html>