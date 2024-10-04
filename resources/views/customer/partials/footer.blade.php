<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-3 mt-3">
    <div class="container py-5">
        <div class="pb-4 mb-4 d-flex align-items-center" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5);">
            <a href="{{ url('/') }}" class="d-flex align-items-center">
                <img src="customer/img/logo-td-circle.png" style="width: 80px; height: 80px;" alt="logo">
                <div class="ms-3">
                    <h1 class="text-primary mb-0">{{ config('app.name') }}</h1>
                    <p class="text-secondary mb-0">100% Dari Bahan Berkualitas</p>
                </div>
            </a>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Alamat</h4>
                    <p class="mb-4">Jl. Dipati Ukur No.77 A, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Tentang</h4>
                    <a class="btn-link" href="">About Us</a>
                    <a class="btn-link" href="">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Metode Pembayaran</h4>
                    <img src="customer/img/payment.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="{{ url('/') }}"><i class="fas fa-copyright text-light me-2"></i>{{ config('app.name') }}</a>, All right reserved.</span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->