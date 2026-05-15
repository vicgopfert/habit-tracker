<x-layout>
    <main class="py-10">
        <h1 class="font-bold">Faça seu login</h1>

        <section class="mt-4">
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                @error('email')
                    <div class="bg-red-500 text-white p-2 mt-2 rounded-md">
                        {{ $message }}
                    </div>
                @enderror

                <input type="email" name="email" placeholder="youremail@example.com" class="bg-white p-2 border-2">
                <input type="password" name="password" placeholder="•••••••••••" class="bg-white p-2 border-2">
                <button type="submit" class="bg-white border-2 p-2">Entrar</button>
            </form>
        </section>
    </main>
</x-layout>
