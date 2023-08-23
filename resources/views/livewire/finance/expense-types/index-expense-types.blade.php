<div>
    @livewire('finance.expense-types.create-expense-type')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ExpenseTypes') }}
        </h2>
    </x-slot>

    <div class="block justify-between items-center p-4 mx-4 mt-4 mb-6 bg-white dark:bg-slate-800 rounded-2xl shadow-xl shadow-gray-200 dark:shadow-gray-900 lg:p-5 sm:flex">
        <div class="mb-1 w-full">
            <div class="mb-4">
                <x-breadcrumb></x-breadcrumb>
                <h1 class="text-xl font-semibold text-gray-900 dark:text-gray-300 sm:text-2xl"> {{ __('All expenseTypes') }}</h1>
            </div>
            <div class="block items-center sm:flex md:divide-x md:divide-gray-100 dark:md:divide-gray-700">
                <form class="mb-4 sm:pr-3 sm:mb-0" action="#" method="GET">
                    <label for="products-search" class="sr-only">Search</label>
                    <div class="relative mt-1 sm:w-64 xl:w-96">
                        <input type="text" name="email" id="products-search"
                            class="dark:bg-slate-800 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-300 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 dark:focus:ring-fuchsia-800 focus:border-fuchsia-300 block w-full p-2.5"
                            placeholder="{{ __('Search for expenseTypes') }}" wire:model="search">
                    </div>
                </form>
                <div class="flex items-center w-full sm:justify-end">
                    <div class="hidden pl-2 space-x-1 md:flex">
                       
                    </div>
                    <x-button wire:click="$emit('createExpenseType')" wire:loading.attr="disabled" class="disabled:opacity-25">
                        Add ExpenseType
                    </x-button>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="flex flex-col my-6 mx-4 rounded-2xl shadow-xl shadow-gray-200 dark:shadow-gray-900"">
        <div class="overflow-x-auto rounded-2xl">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 table-fixed">
                        <thead class="bg-white dark:bg-slate-800">
                            <tr>
                                <th scope="col" class="p-4 lg:p-5">
                                    <div class="flex items-center">
                                        <x-checkbox />
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                    {{ __('Code') }}
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                    {{ __('ExpenseType Name') }}
                                </th>
                                
                                <th scope="col" class="p-4 lg:p-5"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($expenseTypes as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="p-4 w-4 lg:p-5">
                                        <div class="flex items-center">
                                            <x-checkbox />
                                            <label for="checkbox-523323" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    <td class="p-4 text-base font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap lg:p-5">#{{ $item->id }}
                                    </td>

                                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                                        <div class="text-base font-semibold text-gray-900 dark:text-gray-100">{{ $item->name }}</div>
                                    </td>

                                    <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                                        <button type="button" data-modal-toggle="product-modal" wire:click="$emit('editExpenseType', {{$item->id}})"
                                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 dark:text-gray-300 dark:bg-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-100 hover:scale-[1.02] transition-all">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" data-modal-toggle="product-modal" wire:click="delete({{$item->id}})"
                                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 dark:text-gray-300 dark:bg-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-100 hover:scale-[1.02] transition-all">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            @if( !count($expenseTypes) )
                                <tr class="hover:bg-gray-100">
                                    <td colspan="5" class="p-4 bg-gray-700 text-base font-medium text-gray-300 whitespace-nowrap lg:p-5">
                                        No existen datos registrados                
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- \Table --}}
</div>
