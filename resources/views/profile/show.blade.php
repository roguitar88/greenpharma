<x-app-layout>
    <div class="container my-5">
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    @livewire('profile.update-profile-information-form')

    <x-jet-section-border />

    @livewire('profile.update-password-form')

    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <x-jet-section-border />

        @livewire('profile.two-factor-authentication-form')
    @endif

    <x-jet-section-border />

    @livewire('profile.logout-other-browser-sessions-form')

    <x-jet-section-border />

    @livewire('profile.delete-user-form')
    </div>
</x-app-layout>
