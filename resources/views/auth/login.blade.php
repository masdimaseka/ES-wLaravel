<x-layouts.layout title="Log In">
    <div class="flex flex-col items-center">
        <form action="{{ route('login') }}" method="POST" class="card card-border bg-base-100 shadow-sm w-xl py-6">
            @csrf
            <div class="card-body">
                <h2 class="font-bold text-xl mb-6 text-center">Log In to Your Account</h2>
                <div class="mb-6">
                    <div class="flex flex-col mb-4">
                        <label for="email">Email : </label>
                        <input class="input w-full" type="email" name="email" required value="{{ old('email') }}" placeholder="example@gmail.com">
                    </div>
                    
                    <div class="flex flex-col mb-4">
                        <label for="password">Password : </label>
                        <input class="input w-full" type="password" name="password" required placeholder="Masukkan password (6+ karakter)">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary bg-custom-primary border-0 shadow-none text-white">Log In</button>

                <div class="mt-3">
                    <p class="text-center">Belum punya akun? <a href="{{ route('show.register') }}" class="text-custom-primary">Register</a></p>
                </div>

                @if ($errors->any())
                    <ul class="px-4 py-2 bg-red-100">
                        @foreach ($errors->all() as $error)
                            <li class="my-2 text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </form>
    </div>
</x-layouts.layout>
