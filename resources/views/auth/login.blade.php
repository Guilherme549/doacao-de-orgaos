<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Senha">
    <button type="submit">Entrar</button>
</form>
