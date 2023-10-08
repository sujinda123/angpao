    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/style.css') }}">
    </head>

    <body>
        <header>
            {{-- Topbar --}}
            <div class="container-fluid d-flex justify-content-between align-items-center bg-333333">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle fs-12 bg-none border-none" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ไทย
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">ไทย</a></li>
                        <li><a class="dropdown-item" href="#">อังกฤษ</a></li>
                    </ul>
                </div>
                <div>
                    <span class="text-white fs-12">ลงชื่อเข้าใช้</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13"
                        fill="none">
                        <path
                            d="M6 7.3125C7.86328 7.3125 9.375 5.6748 9.375 3.65625C9.375 1.6377 7.86328 0 6 0C4.13672 0 2.625 1.6377 2.625 3.65625C2.625 5.6748 4.13672 7.3125 6 7.3125ZM9 8.125H7.70859C7.18828 8.38398 6.60938 8.53125 6 8.53125C5.39062 8.53125 4.81406 8.38398 4.29141 8.125H3C1.34297 8.125 0 9.57988 0 11.375V11.7812C0 12.4541 0.503906 13 1.125 13H10.875C11.4961 13 12 12.4541 12 11.7812V11.375C12 9.57988 10.657 8.125 9 8.125Z"
                            fill="white" />
                    </svg>
                </div>
            </div>

            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-980000-C10000">
                <div class="container-fluid justify-content-center align-items-center gap-2">
                    <a class="navbar-brand mr-13" href="#"><img src="{{ asset('/images/logo_navbar.png') }}"
                            alt=""></a>
                    <div class="input-group mb-3 mw-460 mr-13 bg-dbdbdb-ffffff br-10"
                        style="margin-bottom: 0 !important">
                        <input type="text" class="form-control bg-none br-10 h-47 border-none outline-none"
                            placeholder="ค้นหาสินค้าที่คุณต้องการ" aria-label="search" aria-describedby="basic-addon1">
                        <span class="input-group-text bg-none border-none" id="basic-addon1"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                fill="none">
                                <path
                                    d="M24.6582 21.6162L19.79 16.748C19.5703 16.5283 19.2725 16.4062 18.96 16.4062H18.1641C19.5117 14.6826 20.3125 12.5146 20.3125 10.1562C20.3125 4.5459 15.7666 0 10.1562 0C4.5459 0 0 4.5459 0 10.1562C0 15.7666 4.5459 20.3125 10.1562 20.3125C12.5146 20.3125 14.6826 19.5117 16.4062 18.1641V18.96C16.4062 19.2725 16.5283 19.5703 16.748 19.79L21.6162 24.6582C22.0752 25.1172 22.8174 25.1172 23.2715 24.6582L24.6533 23.2764C25.1123 22.8174 25.1123 22.0752 24.6582 21.6162ZM10.1562 16.4062C6.7041 16.4062 3.90625 13.6133 3.90625 10.1562C3.90625 6.7041 6.69922 3.90625 10.1562 3.90625C13.6084 3.90625 16.4062 6.69922 16.4062 10.1562C16.4062 13.6084 13.6133 16.4062 10.1562 16.4062Z"
                                    fill="black" />
                            </svg>
                        </span>
                    </div>
                    <svg class="mr-13" xmlns="http://www.w3.org/2000/svg" width="37" height="33"
                        viewBox="0 0 37 33" fill="none">
                        <path
                            d="M33.9244 19.421L36.961 6.0147C37.1803 5.04674 36.447 4.125 35.4577 4.125H10.2269L9.63812 1.23686C9.4914 0.516979 8.86009 0 8.12773 0H1.54167C0.690217 0 0 0.692549 0 1.54688V2.57812C0 3.43245 0.690217 4.125 1.54167 4.125H6.03068L10.5431 26.2605C9.46359 26.8834 8.73611 28.0514 8.73611 29.3906C8.73611 31.384 10.3466 33 12.3333 33C14.32 33 15.9306 31.384 15.9306 29.3906C15.9306 28.3804 15.5164 27.4677 14.8499 26.8125H28.3168C27.6502 27.4677 27.2361 28.3804 27.2361 29.3906C27.2361 31.384 28.8466 33 30.8333 33C32.82 33 34.4306 31.384 34.4306 29.3906C34.4306 27.9616 33.6027 26.7266 32.4021 26.1419L32.7564 24.5772C32.9757 23.6092 32.2424 22.6875 31.2531 22.6875H14.011L13.5906 20.625H32.4211C33.1409 20.625 33.7649 20.1252 33.9244 19.421Z"
                            fill="white" />
                    </svg>

                    <svg class="mr-40" xmlns="http://www.w3.org/2000/svg" width="33" height="28"
                        viewBox="0 0 33 28" fill="none">
                        <path id="Vector"
                            d="M29.7969 1.91454C26.2649 -1.00416 21.0121 -0.479166 17.7702 2.76452L16.5005 4.03325L15.2308 2.76452C11.9953 -0.479166 6.73601 -1.00416 3.20405 1.91454C-0.843529 5.26448 -1.05622 11.2769 2.56598 14.9081L15.0374 27.3953C15.8431 28.2016 17.1514 28.2016 17.9571 27.3953L30.4285 14.9081C34.0572 11.2769 33.8445 5.26448 29.7969 1.91454Z"
                            fill="white" />
                    </svg>
                    <div>
                        <img src="{{ asset('/images/avartar_navbar_user.png') }}" alt="">
                        <span class="text-white fs-16 fw-400">@ANGPAO</span>
                    </div>
                </div>
            </nav>
        </header>
