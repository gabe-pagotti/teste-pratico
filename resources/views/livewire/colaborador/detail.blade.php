<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Colaboradores') }}
        </h2>
    </x-slot>

    <div>
        <div class="flex items-center justify-end mb-4">
            <a class="underline dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('colaboradores.form', $colaborador->id) }}" wire:navigate>
                <img src="{{ asset('storage/icon-edit.svg') }}" class="w-6 h-6">
            </a>
            <button type="button" wire:click="delete({{$colaborador->id}})" wire:confirm="Are you sure you want to delete this post?">
                <img src="{{ asset('storage/icon-delete.svg') }}" class="w-6 h-6">
            </button>
        </div>

        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Nome") }}</dt>
                <dd class="text-lg font-semibold">{{ $colaborador->nome }}</dd>
            </div>
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("E-mail") }}</dt>
                <dd class="text-lg font-semibold">{{ $colaborador->email }}</dd>
            </div>
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("CPF") }}</dt>
                <dd class="text-lg font-semibold">{{ $colaborador->cpf }}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Unidade") }}</dt>
                <dd class="text-lg font-semibold">{{ $colaborador->unidade->nome }}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Data de Criação") }}</dt>
                <dd class="text-lg font-semibold">{{ $colaborador->created_at->format("d/m/Y H:i:s") }}</dd>
            </div>
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ __("Data de Atualização") }}</dt>
                <dd class="text-lg font-semibold">{{ $colaborador->updated_at->format("d/m/Y H:i:s") }}</dd>
            </div>
        </dl>
    </div>
</div>
