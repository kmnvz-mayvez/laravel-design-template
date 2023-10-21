@extends('layouts.mepandes')

@section('isi')
<section class="p-4" id="sb">
    <div class="container rounded-6" id="sb-ort">
        <div class="container-sm d-flex justify-content-center mt-4" data-aos="fade-in">
            <img data-src="{{ asset('svg/pura.svg') }}" class="lazyload img-fluid">
        </div>
        <div class="sb-om">
            Om Swastiastu
        </div>
        <div class="container">
            <div class="sb-p p-4">
                <p> Atas asungkerta waranugraha Sang Hyang Widi Wasa/ Tuhan Yang Maha Esa..
                    Kami selaku Orang Tua mengundang Bapak/ Ibu/ Saudara/ i pada Upacara Manusa Yadnya
                    Mepandes/ Metatah/ Potong Gigi Putra/ Putri Kami..</p>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="sb-bpk justify-content-center p-4 mb-4">
                <div class="svg">
                    <img data-src="{{ asset('svg/mdl.svg') }}" class="lazyload" />
                </div>
                <img src="{{ asset('storage/uploads/1628291921.webp') }}" data-mdb-img="https://mepandeswp.mayvez.com/06da8f242adb218cb26b68ca522991a52d146a8d/b947/0d2f87e4d8c081b44453feb536386b31c87c7c8b.webp" class="rounded-circle mt-5 ls-is-cached lazyloaded" alt="avatar" style="width: 175px;" data-aos="fade-out" />
            </div>
        </div>
        <div class="sb-ad-group">
            <div class="ft-bpk" data-aos="fade-out">
                <h5 class="d-flex align-items-center p-2"><span class="me-2 badge bg-primary">Bapak.</span>Lorem Ipsum</h5>
            </div>
            <div class="ad">
                <img data-src="{{ asset('svg/ad.svg') }}" class="lazyload" />
            </div>
            <div class="ft-ib" data-aos="slide-right">
                <h5 class="d-flex align-items-center p-2"><span class="me-2 badge bg-primary">Ibu.</span>Lorem Ipsum</h5>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="svg">
                <img data-src="{{ asset('svg/mdl.svg') }}" class="lazyload" />
            </div>
            <img src="{{ asset('storage/uploads/1628291921.webp') }}" data-mdb-img="https://mepandeswp.mayvez.com/06da8f242adb218cb26b68ca522991a52d146a8d/b947/f72085fbf386b55b2f85e0cff1cda1d9edc26677.webp" class="rounded-circle mt-5 ls-is-cached lazyloaded" alt="avatar" style="width: 175px;" data-aos="fade-out" />
        </div>
        <div class="mt-6">
            <svg data-anim="slide-down" width="28" height="42" viewBox="0 0 28 42" fill="none" xmlns="http://www.w3.org/2000/svg" class="has-animate" data-load-animation="true">
                <rect opacity="0.6" x="0.5" y="0.5" width="27" height="41" rx="13.5" stroke="#757346"></rect>
                <rect id="scroll-animate" opacity="0.6" x="12" y="6.66699" width="4" height="9.33333" rx="2" fill="#A79E74">
                    <animateTransform attributeName="transform" type="translate" from="0 0" to="0 20" begin="0s" dur="1s" repeatCount="indefinite" />
                </rect>
            </svg>
        </div>
    </div>
</section>
@endsection