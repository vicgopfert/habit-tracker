<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
            <h2 class="font-bold text-2xl mb-5">Faça seu Login</h2>

            <p class="mb-5">Insira seus dados para acessar</p>

            <form action="{{ route('auth.login') }}" method="post" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="youremail@example.com"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="•••••••••••"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-white border-2 p-2">Entrar</button>
            </form>

            <p class="mt-5 text-center">
                Não tem uma conta? <a href="{{ route('site.register') }}"
                    class="text-blue-500 underline hover:text-blue-700 transition-colors duration-300">Registre-se</a>
            </p>
        </section>
    </main>
</x-layout>
