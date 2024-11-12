<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unidades') }}
        </h2>
    </x-slot>

    <div>
        <div class="flex items-center justify-end mb-4">
            <a class="underline dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('unidades.form', $unidade->id) }}" wire:navigate>
                <img src="{{ asset('storage/icon-edit.svg') }}" class="w-6 h-6">
            </a>
            <button type="button" wire:click="delete({{$unidade->id}})" wire:confirm="Are you sure you want to delete this post?">
                <img src="{{ asset('storage/icon-delete.svg') }}" class="w-6 h-6">
            </button>
        </div>

        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Nome Fantasia") }}</dt>
                <dd class="text-lg font-semibold">{{ $unidade->nome_fantasia }}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Razão Social") }}</dt>
                <dd class="text-lg font-semibold">{{ $unidade->razao_social }}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("CNPJ") }}</dt>
                <dd class="text-lg font-semibold">{{ $unidade->cnpj }}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Bandeira") }}</dt>
                <dd class="text-lg font-semibold">{{ $unidade->bandeira->nome }}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Data de Criação") }}</dt>
                <dd class="text-lg font-semibold">{{ $unidade->created_at->format("d/m/Y H:i:s") }}</dd>
            </div>
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Data de Atualização") }}</dt>
                <dd class="text-lg font-semibold">{{ $unidade->updated_at->format("d/m/Y H:i:s") }}</dd>
            </div>
        </dl>
    </div>
</div>
