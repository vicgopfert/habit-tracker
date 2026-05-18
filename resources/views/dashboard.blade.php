<x-layout>
    <main class="max-w-4xl mx-auto py-10 px-6">
        <section class="mb-10">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-4xl font-bold tracking-tight text-zinc-900">
                        Dashboard
                    </h1>

                    <p class="mt-3 text-zinc-600">
                        Bem-vindo(a),
                        <span class="font-semibold text-zinc-900">
                            {{ auth()->user()->name }}
                        </span>
                    </p>
                </div>

                <a href="{{ route('habit.create') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-zinc-900 px-5 py-3 text-sm font-medium text-white shadow-sm transition hover:bg-zinc-800 hover:shadow-md">
                    <span class="text-lg leading-none">+</span>
                    Novo Hábito
                </a>
            </div>

            @if (session('success'))
                <div class="bg-emerald-100 border border-emerald-200 rounded-xl p-4 text-emerald-700">
                    {{ session('success') }}
                </div>
            @endif
        </section>

        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold text-zinc-800">
                    Seus hábitos
                </h2>

                <span class="text-sm text-zinc-500">
                    {{ $habits->count() }} hábito(s)
                </span>
            </div>

            <div class="grid gap-4">
                @forelse ($habits as $habit)
                    <div class="bg-white border border-zinc-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-zinc-900">
                                {{ $habit->name }}
                            </h3>

                            <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                        </div>
                    </div>
                @empty
                    <div class="bg-zinc-100 border border-dashed border-zinc-300 rounded-xl p-8 text-center">
                        <p class="text-zinc-600">
                            Você ainda não cadastrou nenhum hábito.
                        </p>

                        <a href="{{ route('habit.create') }}"
                            class="mt-4 inline-block px-4 py-2 bg-zinc-900 text-white rounded-lg">
                            Cadastrar hábito
                        </a>
                    </div>
                @endforelse
            </div>
        </section>
    </main>
</x-layout>
