<x-jet-action-section>
    <x-slot name="title">
        {{ __('Autenticação de Duplo Fator') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Acrescente mais segurança à sua conta habilitando a autenticação de duplo fator.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="h5 font-weight-bold">
            @if ($this->enabled)
                {{ __('Autenticação de duplo fator habilitada com sucesso.') }}
            @else
                {{ __('Autenticação de duplo fator desabilitada.') }}
            @endif
        </h3>

        <div class="mt-3">
            <p>
                {{ __('Assim que a autenticação de duplo fator é habilitada, você recebe um token de segurança gerado randomicamente durante o processo. Você pode receber este token via celular por meio do Autenticador do Google.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-3">
                    <p>
                        {{ __('Agora a autenticação de duplo fator se encontra ativada. Escaneie o seguinte QR code usando o seu celular.') }}
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4">
                    <p>
                        {{ __('Guarde os códigos de recuperação num local seguro. Eles podem ser usados para recuperar o acesso à sua conta caso seu dispositivo usado para a autenticação de duplo fator seja perdido.') }}
                    </p>
                </div>

                <div class="w-75 bg-light rounded p-3">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-3">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Ativar') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Regenerar Códigos de Recuperação') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Exibir Códigos de Recuperação') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('Desativar') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>