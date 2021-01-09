<x-guest-layout>
    <!-- <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot> -->

    <!-- secão 1 -->
    <div class="section2">
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="/reset-password">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="mb-4">
                <p style="font-size:85%; font-weight: bold; color:#09F; font-family:Verdana, Geneva, sans-serif;">Agora crie a sua nova senha.</p>
            </div>
            <div class="form-group">
                <!-- <x-jet-label value="{{ __('Email') }}" /> -->

                <x-jet-input placeholder="Email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                <x-jet-input-error for="email"></x-jet-input-error>
            </div>

            <div class="form-group">
                <!-- <x-jet-label value="{{ __('Senha') }}" /> -->

                <x-jet-input placeholder="Senha" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" required autocomplete="new-password" />
                <x-jet-input-error for="password"></x-jet-input-error>
            </div>

            <div class="form-group">
                <!-- <x-jet-label value="{{ __('Confirmar Senha') }}" /> -->

                <x-jet-input placeholder="Confirmar Senha" class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-jet-input-error for="password_confirmation"></x-jet-input-error>
            </div>

            <div class="form-group">
                <x-jet-button>
                    {{ __('Resetar Senha') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</x-guest-layout>