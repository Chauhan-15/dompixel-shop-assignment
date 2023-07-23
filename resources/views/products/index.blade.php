@extends('products.layout')

@section('content')
    <div>
        <div class="flex items-center justify-between">
            {{-- title --}}
            <h1 class="text-3xl font-semibold">Product Catalog</h1>
            {{-- create button --}}
            <a href="/products/create">
                <button class="px-6 py-1 text-lg font-semibold text-white bg-green-600 rounded-md">+ create</button>
            </a>
        </div>
        {{-- process message --}}
        @if ($message = Session::get('success'))
            <div class="p-3 mt-4 text-center text-green-600 bg-green-100 rounded-md borde-green-600">
                <p>{{ $message }}</p>
            </div>
        @elseif ($message = Session::get('failure'))
            <div class="p-3 mt-4 text-center text-red-600 bg-green-100 rounded-md borde-green-600">
                <p>{{ $message }}</p>
            </div>
        @endif   
        {{-- product table --}}
        <div class="py-10 overflow-x-auto">
            <table class="w-full whitespace-no-wrap whitespace-no-wrapw-full">
                <thead>
                    <tr class="font-bold tracking-wide bg-gray-200 shadow-md">
                        <td class="px-6 py-4 border">NAME</td>
                        <td class="px-6 py-4 border">DESCRIPTION</td>
                        <td class="px-6 py-4 border">PRICE</td>
                        <td class="px-6 py-4 border">QUANTITY</td>
                        <td class="px-6 py-4 border">ACTION</td>
                    </tr>
                </thead>
                @foreach($products as $product)
                    <tr>
                        <td class="px-6 py-4 border">{{$product->name}}</td>
                        <td class="px-6 py-4 border">{{$product->description}}</td>
                        <td class="px-6 py-4 border">{{$product->price}} INR</td>
                        <td class="px-6 py-4 border">{{$product->quantity}}</td>
                        <td class="px-6 py-4 border">
                            <div class="sm:flex">
                                <a href="{{ route('products.edit',$product->id) }}" class="inline-flex items-center p-2 font-bold text-white bg-blue-500 rounded shadow-md sm:mr-5 hover:bg-blue-600">
                                    <i class="material-icons">create</i>
                                </a>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center p-2 font-bold text-white bg-red-500 rounded shadow-md hover:bg-red-600">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $products->links() !!}
        </div>
    </div>
@endsection