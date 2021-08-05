<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('partials.nav')
    <h1>login</h1>
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach    
        </ul>
    @endif    
    <form method="POST">
        @csrf
        <label>
            <input name="email" type="email" required autofocus value="{{ old('email') }}" placeholder="Email">
        </label><br>
        <label>
            <input name="password" type="Password" required placeholder="Contraseña">
        </label><br>  
        <label>
            <input type="checkbox" name="remember"> Recuerda mi sesion
        </label><br>    
        <button type="submit">Login</button>
    </form>
</body>
</html>