<html lang="fr">
<body>
<h1>Login</h1>
<form method="post" action="/auth">
    <label>
        Email
        <input type="email" name="email" value="{{ old('email') }}"/>
    </label>
    <label>
        Password
        <input type="password" name="password"/>
    </label>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <button type="submit">Submit</button>
    <button type="reset">Clear</button>
</form>
</body>
</html>
