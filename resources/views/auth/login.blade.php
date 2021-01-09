<x-guest-layout>
    <!-- <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot> -->

    <!-- secão 1 -->
    <div class="section2">
        <img class="hidden-md" id="img-absolute" src="{{ 'assets/images/man-showing.jpg'}}" alt="" />
        <x-jet-validation-errors class="mb-3 rounded-0" style="display: none;" />

        <h1>Login</h1>

        @if (session('status'))
            <div class="alert alert-success mb-3 rounded-0" style="display: none;" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form name="login2" method="post" action="{{ route('login') }} ">
            @csrf
            <!--<h2 class="titulo">FAZER LOGIN NO PORTAL AGORA</h2>-->
            <div class="form-group">
                <!-- <input placeholder="Email ou usuário"  class="form-control" name="email" type="text" maxlength="75"> -->

                <!-- <x-jet-label value="{{ __('Email') }}" /> -->
                <x-jet-input placeholder="Email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" :value="old('email')" required />
                <x-jet-input-error for="email"></x-jet-input-error>
            </div>
            <div class="form-group">
                <!-- <input placeholder="Senha" class="form-control" name="password"  type="password" maxlength="50"> -->

                <!-- <x-jet-label value="{{ __('Password') }}" /> -->
                <x-jet-input placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="current-password" />
                <x-jet-input-error for="password"></x-jet-input-error>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Lembrar-me') }}
                    </label>
                </div>
            </div>
            <div class="form-group mb-1">
                <x-jet-button class="btn btn-primary">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
            <div class="form-group mb-0">
                <p class="mb-0"><span style="color:black; font-family:Times New Roman; font-size:80%;">Não tem conta ainda? Registre-se <a class="text-muted mr-3" href="{{ route('register') }}">aqui</a></span></p>
                @if (Route::has('password.request'))
                    <p><span style="color:black; font-family:Times New Roman; font-size:80%;">Esqueceu a senha? Clique <a class="text-muted mr-3" href="{{ route('password.request') }}">{{ __('aqui') }}</a></span></p>
                @endif
            </div>
            <!-- <input name="signin" class="btn btn-primary" value="Login" type="submit"><br/><br/>
            <span style="color:black; font-family:Times New Roman; font-size:80%;">Não tem conta ainda? Registre-se <a href="{{ url('/register') }}">aqui</a></span><br/>	<span style="color:black; font-family:Times New Roman; font-size:80%;">Esqueceu a senha? Clique <a href="{{ url('/recoverpw') }}">aqui</a></span> -->
            <!--<span style="color:black; font-family:Times New Roman;font-size:80%">Não possui conta ainda? Cadastre-se <a href="register.php">aqui</a></span>-->
        </form>
    </div>

</x-guest-layout>
