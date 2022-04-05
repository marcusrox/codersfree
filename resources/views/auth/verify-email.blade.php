<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div name="logo" class="block w-auto">
                 <img src="{{ asset('img/logo_semeadura02.png') }}" />
             </div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Agradecemos por você ter se cadastrado, mas não você ainda não validou o seu endereço de e-mail.
            Para isso é necessário criar no link que enviamos para o seu e-mail. Caso não o tenha recebido, clique abaixo e enviaremos novamente.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                Um novo link de validação foi enviado para o e-mail que você informou no seu cadastro.
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        Reenviar e-mail de verificação
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Sair
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
