@extends('layouts.shape1')

@section('title')
    {{ __('Upload content') }}
@endsection

@section('header')
    <x-header></x-header>
@endsection

@section('css')
    <style>
        .player {
            display: none;
        }

        header,
        header.sticky {
            position: fixed;
        }

        .content-select {
            min-width: 395px;
            max-width: 800px;

            background: rgba(39, 39, 39, 0.25);
            backdrop-filter: blur(8px);

            -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
            box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
        }

        .upload-div .playList:hover {
            background-color: rgba(87, 96, 111, 0.75)
        }

        /* .mr {
                                                    margin-right: 50px !important
                                                }

                                                .ml {
                                                    margin-left: 50px !important
                                                } */
    </style>
@endsection

@section('content')
    <div class="center-content flex justify-center items-center anim2 h-screen w-9/12 mp:w-full my-0 mx-auto">
        <div class="content-select rounded-2xl overflow-hidden justify-center items-center pb-5 flex flex-wrap">

            <h1 class='text-white font-titulo text-3xl font-bold mt-12 mb-5 anim2 w-full text-center px-10'>
                {{ __('What do you want to upload?') }}</h1>

            <div class="upload-div gap-2 mp:gap-16 flex flex-wrap items-center justify-center">

                <div class="playList mr anim2">
                    <!-- LINK -->
                    <a href="{{ route('data.create') }}">
                        <!-- IMG -->
                        <img src="{{ asset('storage/uploads/imagenes/default-song.png') }}" alt="Imagen del album">

                        <h2 class="font-cuerpo font-bold mt-4 text-base sm:text-lg text-center">{{ __('Single') }}

                        </h2>
                    </a>
                </div>

                <div class="playList ml anim2">
                    <!-- LINK -->
                    <a href="{{ route('upload.album_1') }}">
                        <!-- IMG -->
                        <img src="{{ asset('storage/uploads/imagenes/default-album.png') }}" alt="Imagen del album">

                        <h2 class="font-cuerpo font-bold mt-4 text-base sm:text-lg text-center">{{ __('Album') }}

                        </h2>
                    </a>
                </div>

            </div> <!-- div general -->
        </div>
    </div>
@endsection
