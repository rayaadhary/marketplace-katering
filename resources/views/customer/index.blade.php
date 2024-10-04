@extends('customer.partials.main')

@section('contents')
    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-3">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">100% Dari Bahan Berkualitas</h4>
                    <h1 class="mb-5 display-3 text-primary">Dari Dapur Kami ke Meja Anda, Selalu Istimewa</h1>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($all_menu as $key => $item)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} rounded">
                                    <img src="customer/img/{{ $item->image }}" class="img-fluid rounded" style="width: 500px; height: 300px;" alt="img-slide">
                                    <a href="#" class="btn px-4 py-2 text-white rounded text-capitalize">{{ $item->kategori }}</a>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Menu Katering</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">Semua Produk</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">Paket Pagi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px;">Paket Siang</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 130px;">Paket Malam</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                    <span class="text-dark" style="width: 130px;">Paket Single</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($all_menu as $item)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="customer/img/{{ $item->image }}" class="img-fluid w-100 rounded-top" style="width: 300px; height: 200px;" alt="menu-img">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute text-capitalize" style="top: 10px; left: 10px;">{{ $item->kategori }}</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4 class="text-capitalize">{{ $item->name }}</h4>
                                                    <p>{{ $item->description }}</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                                        <a href="{{ url('/menu-detail') }}" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-plus me-2 text-primary"></i> Keranjang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($paket_pagi as $item)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="customer/img/{{ $item->image }}" class="img-fluid w-100 rounded-top" style="width: 300px; height: 200px;" alt="menu-img">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute text-capitalize text-capitalize" style="top: 10px; left: 10px;">{{ $item->kategori }}</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4 class="text-capitalize">{{ $item->name }}</h4>
                                                    <p>{{ $item->description }}</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                                        <a href="{{ url('/menu-detail') }}" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-plus me-2 text-primary"></i> Keranjang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($paket_siang as $item)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="customer/img/{{ $item->image }}" class="img-fluid w-100 rounded-top" style="width: 300px; height: 200px;" alt="menu-img">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute text-capitalize text-capitalize" style="top: 10px; left: 10px;">{{ $item->kategori }}</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4 class="text-capitalize">{{ $item->name }}</h4>
                                                    <p>{{ $item->description }}</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                                        <a href="{{ url('/menu-detail') }}" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-plus me-2 text-primary"></i> Keranjang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($paket_malam as $item)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="customer/img/{{ $item->image }}" class="img-fluid w-100 rounded-top" style="width: 300px; height: 200px;" alt="menu-img">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute text-capitalize text-capitalize" style="top: 10px; left: 10px;">{{ $item->kategori }}</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4 class="text-capitalize">{{ $item->name }}</h4>
                                                    <p>{{ $item->description }}</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                                        <a href="{{ url('/menu-detail') }}" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-plus me-2 text-primary"></i> Keranjang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($paket_single as $item)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="customer/img/{{ $item->image }}" class="img-fluid w-100 rounded-top" style="width: 300px; height: 200px;" alt="menu-img">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute text-capitalize text-capitalize" style="top: 10px; left: 10px;">{{ $item->kategori }}</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4 class="text-capitalize">{{ $item->name }}</h4>
                                                    <p>{{ $item->description }}</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                                        <a href="{{ url('/menu-detail') }}" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-plus me-2 text-primary"></i> Keranjang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->

    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-3">
        <div class="container py-3">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Bebas Ongkir</h5>
                            <p class="mb-0">Gratis ongkir order >500rb</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pembayaran Aman</h5>
                            <p class="mb-0">100% pembayaran aman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-exchange-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pengembalian Dana</h5>
                            <p class="mb-0">Garansi 30 hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Layanan 24/7</h5>
                            <p class="mb-0">Pelayanan cepat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->
@endsection