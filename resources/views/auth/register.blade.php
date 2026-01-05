<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

*{
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    background: #f3f5ff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* ===== Login Card ===== */
form{
    background: #ffffff;
    padding: 35px;
    border-radius: 12px;
    width: 380px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}

/* ===== Inputs ===== */
input{
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    border-radius: 8px;
    border: 1px solid #cfd3ff;
    outline: none;
}

input:focus{
    border-color:#5968f3;
}

/* ===== Button ===== */
button{
    width: 100%;
    margin-top: 15px;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background:#5968f3;
    color:white;
    font-weight: bold;
    cursor: pointer;
}

button:hover{
    background:#4453de;
}

/* ===== Link Text ===== */
p{
    text-align:center;
    margin-top: 15px;
}

a{
    color:#4453de;
    text-decoration:none;
}

a:hover{
    text-decoration:underline;
}

/* ===== Error messages ===== */
ul, p{
    font-size: 14px;
}

</style>

</head>
<body>
    <form method="POST" action="{{ url('/register') }}">
    @csrf

    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>

    <button type="submit">Register</button>
    <p class="mt-3 text-center">
    Vous avez déjà un compte ?
    <a href="{{ route('login') }}" class="text-primary fw-bold">
        Se connecter
    </a>
    </p>

</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

</body>
</html>
