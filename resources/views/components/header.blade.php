<header class="bg-white border-b-2 flex items-center justify-between p-4">
    {{-- LOGO --}}
    <div>
        logo
    </div>

    {{-- GITHUB --}}
    <div>
        <a href="">
            github
        </a>

        @guest
            <a href="{{ route('auth.login') }}"
                class="bg-white border-2 px-4 py-2 rounded-lg text-black font-semibold hover:bg-gray-200 transition-colors">
                Entrar
            </a>
        @endguest

        @auth
            <form class="inline" action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="bg-white border-2 px-4 py-2 rounded-lg text-black font-semibold hover:bg-gray-200 transition-colors">
                    Sair
                </button>
            </form>
        @endauth
    </div>
</header>
