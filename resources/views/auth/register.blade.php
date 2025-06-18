<x-layouts.layout title="Register">
    <div class="flex flex-col items-center">
        <form action="{{ route('register') }}" method="POST" class="card card-border bg-base-100 shadow-sm w-xl py-6">
            @csrf
            <div class="card-body">
                <h2 class="font-bold text-xl mb-6 text-center">Register to Your Account</h2>
                <div class="mb-6">
                    <div class="flex flex-col mb-4">
                        <label for="name">Name : </label>
                        <input class="input w-full" type="text" name="name" required value="{{ old('name') }}" placeholder="Insert your nane">
                    </div>

                    <div class="flex flex-col mb-4">
                        <label for="email">Email : </label>
                        <input class="input w-full" type="email" name="email" required value="{{ old('email') }}" placeholder="example@gmail.com">
                    </div>
                    
                    <div class="flex flex-col mb-4">
                        <label for="password">Password : </label>
                        <input class="input w-full" type="password" name="password" required placeholder="Inser your password (6+ character)">
                    </div>

                    <div class="flex flex-col mb-4">
                        <label for="password_confirmation">Confirmation Password : </label>
                        <input class="input w-full" type="password" name="password_confirmation" required placeholder="Inser your password again">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary bg-custom-primary border-0 shadow-none text-white">Register</button>

                <div class="mt-3">
                    <p class="text-center">Sudah punya akun? <a href="{{ route('show.login') }}" class="text-custom-primary">Login</a></p>
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
