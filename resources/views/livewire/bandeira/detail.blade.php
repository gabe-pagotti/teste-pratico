<div class="text-white">
    <li>
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('bandeiras.form', $bandeira->id) }}" wire:navigate>
            {{ __('Editar') }}
        </a>
        <button
        type="button"
        wire:click="delete({{$bandeira->id}})"
        wire:confirm="Are you sure you want to delete this post?"
    >
    {{ __('Excluir') }}
    </button></li>
    <li>{{ $bandeira->nome }}</li>
    <li>{{ $bandeira->grupo_economico->nome }}</li>
    <li>{{ $bandeira->created_at }}</li>
    <li>{{ $bandeira->updated_at }}</li>
</div>
