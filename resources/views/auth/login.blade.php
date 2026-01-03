<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

{{-- Message d’erreur --}}
@if (session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

{{-- Erreurs de validation --}}
@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('login.post') }}">
    @csrf

    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>

    <button type="submit">Login</button>
</form>

</body>
</html>
