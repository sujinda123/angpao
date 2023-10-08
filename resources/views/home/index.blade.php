<x-header />

<main>
    {{-- Banner --}}
    <div class="container d-flex gap-1 mt-1">
        <div class="">
            <img class="w-100 h-100" src="{{ asset('/images/img_660_384.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-1">
            <div class="">
                <img class="w-100 h-100" src="{{ asset('/images/img_660_190.png') }}" alt="">
            </div>
            <div class="">
                <img class="w-100 h-100" src="{{ asset('/images/img_660_190.png') }}" alt="">
            </div>
        </div>

    </div>
    </div>

    {{-- หมวดหมู่สินค้า --}}
    <div class="container text-center mt-60">
        <h1 class="fs-32 fw-400">หมวดหมู่สินค้า</h1>
        <div class="d-flex justify-content-center gap-4">
            <?php for ($i=0; $i < 9; $i++) { ?>
            <div>
                <img class="w-100 h-100" src="{{ asset('/images/Rectangle 8.png') }}" alt="">
            </div>
            <?php } ?>
        </div>
    </div>

    {{-- แบนเนอร์โฆษณา --}}
    <div class="container text-center mt-60">
        <h1 class="fs-32 fw-400">แบนเนอร์โฆษณา</h1>
        <div class="">
            <img class="w-100 h-100" src="{{ asset('/images/ANDPAObanner 1.png') }}" alt="">
        </div>
    </div>

    {{-- สินค้าแนะนำ --}}
    <div class="container text-center mt-60">
        <h1 class="fs-32 fw-400">สินค้าแนะนำ</h1>
        <div class="d-flex justify-content-center gap-4">
            <?php for ($i=0; $i < 3; $i++) { ?>
            <div>
                <img class="w-100 h-100" src="{{ asset('/images/Rectangle 18.png') }}" alt="">
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<x-footer />
