<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
</head>

<body>
    <h2>Login</h2>

    @if ($errors->any())
    <div style="color:red;">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>