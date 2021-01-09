<x-jet-action-section>
    <x-slot name="title">
        {{ __('Deletar Conta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Delete permanentemente sua conta por aqui.') }}
    </x-slot>

    <x-slot name="content">
        <div>
            {{ __('Uma vez deletada a conta, todos os recursos e dados serão perdidos e de forma definitiva. Antes de prosseguir com a deleção da conta, recomendamos que baixe quaisquer dados que desejar reter futuramente.') }}
        </div>

        <div class="mt-3">
            <x-jet-danger-button wire:click="$emit('confirmingUserDeletion')"
                                 wire:loading.attr="disabled">
                {{ __('Deletar Conta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal id="confirmingUserDeletionModal">
            <x-slot name="title">
                {{ __('Deletar Conta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Tem certeza de que deseja realmente deletar a sua conta? Uma vez deletada a conta, todos os recursos e dados serão perdidos de forma permanente. Por favor, digite a senha para confirmar que deseja deletar permanentemente a conta.') }}

                <div class="mt-4 w-75" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Senha"
                                 x-ref="password"
                                 wire:model.defer="password"
                                 wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')"
                                        wire:loading.attr="disabled"
                                        data-dismiss="modal">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button wire:click="deleteUser" wire:loading.attr="disabled"
                                     data-dismiss="modal">
                    {{ __('Deletar Conta') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>

    @push('scripts')
        <script>
            Livewire.on('confirmingUserDeletion', () => {
                @this.confirmUserDeletion()
                new Bootstrap.Modal(document.getElementById('confirmingUserDeletionModal')).toggle()
            })
        </script>
    @endpush
</x-jet-action-section>
