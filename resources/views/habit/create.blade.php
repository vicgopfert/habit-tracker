<x-layout>
    <main class="max-w-2xl mx-auto py-12 px-6">
        <div class="space-y-8">
            <div>
                <h1 class="text-3xl font-bold text-zinc-900">Novo Hábito</h1>
                <p class="mt-2 text-zinc-600">Crie um novo hábito para acompanhar.</p>
            </div>

            <form action="{{ route('habit.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-zinc-700">Nome do Hábito</label>
                    <input type="text" id="name" name="name" placeholder="Ex: Beber 2L de água por dia"
                        required
                        class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 shadow-sm @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit"
                        class="px-6 py-3 bg-zinc-900 text-white rounded-xl hover:bg-zinc-800 transition shadow-sm">
                        Salvar Hábito
                    </button>

                    <a href="{{ route('site.dashboard') }}"
                        class="px-6 py-3 bg-zinc-100 text-zinc-900 rounded-xl hover:bg-zinc-200 transition shadow-sm">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </main>
</x-layout>
