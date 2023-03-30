<x-layout>
    <x-admin-nav/>
    <div class="container">
        @auth
        <h1>Hola {{auth()->user()->name}}</h1>

        @endauth
    </div>
</x-layout>