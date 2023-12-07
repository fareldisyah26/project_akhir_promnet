@extends('layouts.app')

@section('content')
    <div class="d-inline-flex w-screen m-5 ps-5 pt-2 pb-5 mb-5" style="font-family: Poppins background-color: #FAE3B6">
        <div class="w-50 ms-2 ">
            <div class="d-block" style="font-size: 55px;">
                <p class="fw-bold">Need to Call</p>
            </div>
            <div class="d-block mt-3 me-5 pe-5">
                <p class="me-5 pe-5 pb-2" style="font-size: 24px">Here you can find out the emergency numbers that you need in Purwakarta.</p>
            </div>

            <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            <div class="mt-3">

                



            </div>
        </div>
        <div class="container">
           <img src="/img/pngwing.com.png" class="img-fluid">
        </div>

            <style>
            .container {
                display: flex;
                justify-content: flex-end;
            }
            .img-fluid {
                max-width: 400px; /* Ubah ukuran sesuai kebutuhan */
                height: auto; /* Biarkan tinggi mengikuti aspek rasio gambar */
                float: right;
            }
            </style>
    </div>
@endsection
