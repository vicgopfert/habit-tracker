<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
            <h2 class="font-bold text-2xl mb-5">Registre-se</h2>

            <p class="mb-5">Preencha as informações para se cadastrar</p>

            <form action="{{ route('auth.register') }}" method="post" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">Nome</label>
                    <input type="text" name="name" placeholder="Seu nome"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

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

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">Confirmar Senha</label>
                    <input type="password" name="password_confirmation" placeholder="•••••••••••"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-white border-2 p-2">Cadastrar</button>
            </form>

            <p class="mt-5 text-center">
                Já tem uma conta? <a href="{{ route('site.login') }}"
                    class="text-blue-500 underline hover:text-blue-700 transition-colors duration-300">Faça login</a>
            </p>
        </section>
    </main>
</x-layout>
