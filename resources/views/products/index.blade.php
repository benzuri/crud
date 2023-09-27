@extends('layouts.app')

@section('content')
<div class="relative overflow-auto">
    <div class="mt-2 flex justify-end gap-4 text-white text-sm font-bold font-mono leading-6 rounded-lg">
        @if (session('status'))
        <div class="flex-auto flex items-center justify-center">
            <div class="flex items-center w-full p-3 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('status') }}</span>
                </div>
            </div>
        </div>
        @endif
        @if(Route::is('products.index') )
        <div class="flex-none rounded-lg flex items-center justify-end">
            <div class="flex justify-end">
                <a href="{{ route('products.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-3 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add product
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        @endif
    </div>
</div>

<div class="mt-6 bg-white dark:bg-gray-800">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-3">
                        Image
                    </th>
                    <th scope="col" class="p-3">
                        Product name
                    </th>
                    <th scope="col" class="p-3">
                        Description
                    </th>
                    <th scope="col" class="p-3 hidden md:block">
                        Image url
                    </th>
                    <th scope="col" class="p-3">
                        Action
                    </th>
            </thead>
            <tbody>
                @if(count($products) == 0)
                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">No products</td>
                </tr>
                @else
                @foreach($products as $product)
                <tr class="bg-white hover:brightness-95 hover:dark:brightness-125 dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="p-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-20">
                    </td>
                    <td class="p-3">
                        {{ $product->name }}
                    </td>
                    <td class="p-3">
                        {{ $product->description }}
                    </td>
                    <td class="p-3 hidden md:table-cell">
                        {{ $product->image }}
                    </td>
                    <td class="p-3 h-24 grid grid-cols-2 gap-4 content-center">
                        <a href="{{ route('products.edit', $product->id) }}" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                        <a href="{{ route('products.delete', $product->id) }}" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection