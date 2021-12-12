{{-- {{dd($data);}} --}}

<h1>User Login</h1>
{{-- <form action="/users" method="GET"> --}}
{{-- <form action="/users" method="POST"> --}}
    {{-- {{method_field('PUT')}} --}}
    {{-- {{method_field('DELETE')}} --}}
    {{-- Same way we can use patch, options. Head method is always supported --}}
    {{-- @csrf
    <input type="text" name="username" placeholder="Username"/>
    <br><br>
    <input type="text" name="password" placeholder="Password"/>
    <br><br>
    <button type="submit">Login</button>
</form> --}}




<form action="/users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username"/>
    <br><br>
    <input type="text" name="password" placeholder="Password"/>
    <br><br>
    <button type="submit">Login</button>
</form>
