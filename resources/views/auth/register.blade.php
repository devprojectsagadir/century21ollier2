<x-layout>
    <div>
        <form action="{{ url('/register') }}">
            @csrf
            <input type="text" placeholder="username" />
            <input type="password" placeholder="passowrd" />
            <button type="submit">submit</button>
        </form>
    </div>
</x-layout>
