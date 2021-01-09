<x-guest-layout>
    <!-- <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot> -->

    <!-- secão 1 -->
    <div class="section2">
        <x-jet-validation-errors class="mb-4" style="display: none;" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h2 class="title"><img src="{{ asset('assets/images/lock.png') }}" style="width: 10%; height: auto; margin-top: -10px;" /> CRIE A SUA CONTA</h2>
            <span style="font-size:9px; color:#960;">*Dica de senha: no mínimo 8 caracteres - números, maiúsculas e minúsculas</span><br/><br/>

            <div class="form-group">
                <!-- <x-jet-label value="{{ __('Nome') }}" /> -->

                <x-jet-input placeholder="Apelido" class="{{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                <x-jet-input-error for="username"></x-jet-input-error>
            </div>

            <div class="form-group">
                <!-- <x-jet-label value="{{ __('Email') }}" /> -->

                <x-jet-input placeholder="Email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" :value="old('email')" required />
                <x-jet-input-error for="email"></x-jet-input-error>
            </div>

            <div class="form-group">
                <!-- <x-jet-label value="{{ __('Senha') }}" /> -->

                <x-jet-input placeholder="Senha" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" required autocomplete="new-password" />
                <x-jet-input-error for="password"></x-jet-input-error>
            </div>

            <div class="form-group">
                <!-- <x-jet-label value="{{ __('Confirmar Senha') }}" /> -->

                <x-jet-input placeholder="Confirmar Senha" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="terms" id="terms">

                    <label class="form-check-label" for="remember">
                        Li e concordo com os <a href="{{ url('/terms') }}">Termos de Uso</a>
                        <!-- {{ __('Li e concordo com os Termos de Uso') }} -->
                    </label>
                </div>
            </div>

            <div class="form-group mb-2">
                <x-jet-button>
                    {{ __('Cadastre-se') }}
                </x-jet-button>
            </div>

            <div class="form-group">
                <p class="mb-0"><span style="color:black; font-family:Times New Roman; font-size:80%;"><a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">{{ __('Já possui cadastro?') }}</a></span></p>
            </div>

        </form>

    </div>

</x-guest-layout>
