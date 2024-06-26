<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ url('/svg/logo-v2.svg') }}">
    <title>Deskripsi Produk Page</title>
</head>

<body>
    <div class="w-full bg-white">
        <div class="font-poppins w-full z-[9999]">
            <x-navbar />
        </div>
    </div>
    <div class="w-full bg-white text-black font-inter ">
        <div class="mx-40 grid grid-cols-2 min-h-screen">
            {{-- <form action="/deskripsiproduk/{{ $produk->id }}" method="post"></form> --}}
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/' . $produk->image_path) }}" alt="fotoproduk" class="w-96 h-96 rounded-md object-cover">
                <div>
                    {{-- <img src="#" alt="#"> --}}
                </div>
            </div>
            <div class="py-48 px-36 flex flex-col justify-center">
                <h1 class="font-bold text-3xl">{{ $produk->nama }}</h1>
                <h2 class="font-semibold text-xl">Rp. {{ $produk->harga }}</h2>
                <div class="border my-10"></div>
                <div class="mb-10">
                    <p>Deskripsi :</p>
                    <p>{{ $produk->keterangan }}</p>
                </div>
                <div>
                    <form action="/cart/add" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $produk->id }}">
                        <x-button-keranjang></x-button-keranjang>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
