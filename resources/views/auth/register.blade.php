<x-authlayout>
    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" placeholder="username" name="name" />
            <input type="email" placeholder="email" name="email" />
            <input type="password" placeholder="passowrd" name="password" />
            <button type="submit">submit</button>
             @error('name')
                 error
             @enderror
        </form>
    </div>
</x-authlayout>
