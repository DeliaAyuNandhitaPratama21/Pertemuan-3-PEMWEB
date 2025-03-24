<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <h3>Ini adalah halaman Homepage</h3>

    <x-card 
        title="Produk Terbaik" 
        content="Ini adalah produk terbaik yang kami rekomendasikan untuk Anda."
        image="https://via.placeholder.com/150"
        link="https://example.com"
    />

    <x-alert 
        type="success" 
        message="Berhasil menampilkan data produk!"
    />

</x-layout>