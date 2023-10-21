@extends('layouts.master')

@section('content')
<section class="m-1 p-2">
    <div class="container">
        <div class="text-group-ud">
            <div class="ft-1">
                <h1>Undangan Mepandes</h1>
            </div>
            <div class="ft-2">
                <h3>Nama - lengkap</h3>
            </div>
            <div class="ft-3">
                <h6>Bali | 26 Agustus 2023</h6>
            </div>
        </div>
        <div class="container-sm">
            <div class="border-image-group">
                <div class="border-gold">
                    <img data-src="{{ asset('svg/brdr.svg') }}" class="lazyload" />
                </div>
                <div class="slide-show">
                    <div class="slide active">
                        <img style="width: 300px; height: 430px" data-src="{{ asset('storage/uploads/1690109157.webp') }}" class="lazyload" />
                    </div>
                    <div class="slide">
                        <img style="width: 300px; height: 430px" data-src="{{ asset('storage/uploads/1678338213.webp') }}" class="lazyload" />
                    </div>
                    <div class="slide">
                        <img style="width: 300px; height: 430px" data-src="{{ asset('storage/uploads/1672828282.webp') }}" class="lazyload" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container-sm d-flex justify-content-center mb-2">
            <div class="btn-buka">
                <img data-src="{{ asset('svg/btn.svg') }}" class="lazyload" />
                <div class="opn-txt">
                    <a href="{{ route('undangan', ['data' => $encryptedKata]) }}">Buka</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection