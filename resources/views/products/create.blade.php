@extends('products.layout')

@section('content')
    <div>
        <div class="flex items-center justify-between">
            {{-- title --}}
            <h1 class="text-xl font-bold sm:text-3xl">Create Product</h1>
            {{-- bread crumb --}}
            <div class="text-xs font-bold sm:text-base">
                <span><a href="{{ route('products.index') }}" class="cursor-pointer hover:text-blue-500 ">Products</a> / Create Product </span>
            </div>
        </div>
        {{-- new product create form --}}
        <div class="flex flex-col items-center justify-center w-full my-6 sm:my-24">
            <form method="post" action="{{ route('products.store') }}" class="w-full px-4 py-8 bg-gray-100 rounded shadow-md sm:px-8 sm:w-auto" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block mb-2 text-lg font-bold text-gray-700" for="name">
                        Product name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="name">
                    @error('name')
                        <div class="text-sm font-semibold text-red-500">{{ $message }}</div>
                    @enderror                
                </div>
                <div class="sm:flex sm:justify-between">
                    <div class="mb-4 sm:pr-2">
                        <label class="block mb-2 text-lg font-bold text-gray-700" for="price">
                            Price
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') is-invalid @enderror" id="price" name="price" type="number" placeholder="price">
                        @error('price')
                            <div class="text-sm font-semibold text-red-500">{{ $message }}</div>
                        @enderror                
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-lg font-bold text-gray-700" for="quantity">
                            Quantity
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('quantity') is-invalid @enderror" id="quantity" name="quantity" type="number" placeholder="quantity">
                        @error('quantity')
                            <div class="text-sm font-semibold text-red-500">{{ $message }}</div>
                        @enderror                
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-lg font-bold text-gray-700" for="description">
                        Description
                    </label>
                    <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="description" name="description" cols="10" rows="10" placeholder="describe here..."></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                        create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection