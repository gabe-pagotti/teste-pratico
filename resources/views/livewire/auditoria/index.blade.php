<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Auditoria') }}
        </h2>
    </x-slot>

    <div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3">{{ __("#") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Usuário") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Ação") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Entidade") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Alterações") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Data de Criação") }}</td>
            </thead>
            <tbdody>
                @foreach($logs as $log)
                <tr wire:key="{{ $log->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $log->id }}</th>
                    <td class="px-6 py-4">{{ $log->user->name }}</td>
                    <td class="px-6 py-4">{{ $log->acao }}</td>
                    <td class="px-6 py-4">{!! $log->entidade !!}</td>
                    <td class="px-6 py-4">{!! $log->alteracoes !!}</td>
                    <td class="px-6 py-4">{{ $log->created_at->format("d/m/Y H:i:s") }}</td>
                </tr>
                @endforeach
            </tbdody>
        </table>
    </div>
</div>
