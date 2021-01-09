<x-guest-layout>
    <!-- <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot> -->

    <!-- secão 1 -->
    <div class="section2">

        <div class="mb-4">
            <p style="font-size:85%; font-weight: bold; color:#09F; font-family:Verdana, Geneva, sans-serif;">Se você esqueceu mesmo a sua senha de forma definitiva, entre com o email cadastrado. Enviaremos uma mensagem para o referido email, depois é só seguir as instruções.</p>
            <!-- {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }} -->
        </div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="/forgot-password">
            @csrf

            <div class="form-group">
                <!-- <x-jet-label value="Email" /> -->
                <x-jet-input placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="form-group">
                <x-jet-button>
                    {{ __('Recuperar Senha') }}
                </x-jet-button>
            </div>
        </form>

    </div>
</x-guest-layout>