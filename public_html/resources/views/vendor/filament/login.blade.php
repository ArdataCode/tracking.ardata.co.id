<form wire:submit.prevent="authenticate" class="space-y-8">

    <img src="/frontpage/content/uploads/2023/07/logo-login.png" style="margin: 0 auto; padding: 10px;">
    {{ $this->form }}

    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>

</form>

<style>
.filament-brand.text-xl.font-bold.leading-5.tracking-tight {
    display: none;
}
</style>