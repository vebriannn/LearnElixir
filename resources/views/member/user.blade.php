<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Course</title>
    <link rel="stylesheet" href="{{ asset('learnelixir/assets/css/user_course.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- CONTENT -->
    <div class="custom-container" id="content">
        <h3 class=" mt-5">Belajar Livewire Menengah: Membuat Aplikasi Manajemen Karyawan Sederhana</h3>
        <div class="row mt-4">
            <div class="col-8">
                <img src="{{ asset('learnelixir/assets/image/Design.jpg') }}" alt="">
            </div>
            <div class="col-4">
                <div class="card costum-card ms-5">
                    <div class="card-body px-3">
                        <h6 class="fw-bolder">11 lesson (90 mins)</h6>
                        <div class="d-grid gap-2">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            Intro Kelas
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div
                                                class="btn btn-primary btn-video mx-auto mt-3 d-flex justify-content-between">
                                                <div class="d-flex play">
                                                    <img src="{{ asset('learnelixir/assets/image/play.png') }}"
                                                        alt="">
                                                    <p class="ms-2 my-auto opacity-75">Sejarah Laravel</p>
                                                </div>
                                                <p class="my-auto opacity-75">1 mins</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            Install Tools
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div
                                                class="btn btn-primary btn-video mx-auto mt-3 d-flex justify-content-between">
                                                <div class="d-flex play">
                                                    <img src="{{ asset('learnelixir/assets/image/play.png') }}"
                                                        alt="">
                                                    <p class="ms-2 my-auto opacity-75">Install VsCode</p>
                                                </div>
                                                <p class="my-auto opacity-75">10 mins</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary w-100 pt-3 pb-3 mt-3" href="{{route('member.play')}}">Mulai Tonton</a>
                    </div>
                </div>
            </div>
            <h3 class="mt-4">About</h3>
            <p class="m-0">Untuk bekerja di bidang kreatif, salah satu hal terpenting yang dibutuhkan adalah
                portofolio
                yang menjual. Portofolio adalah kumpulan karya terbaik yang mencerminkan style atau personality seorang
                designer. Demi menarik hati klien/rekruter, Anda harus dapat mempresentasikan pekerjaan Anda dalam
                sebuah portofolio secara sederhana dan mudah dicerna namun dapat menunjukkan jati diri Anda dalam
                berkarya.</p>
            <p class="m-0">Pada case study, kita akan membangun sebuah portofolio dengan design asset Dompet Crypto
                dari
                Pixel Buildwith Angga. Design asset ini sangat efisien untuk membuat portofolio karena sudah siap
                digunakan. Mentor akan menunjukan proses kreatifnya dimulai dari memahami tujuan pembuatan portofolio,
                memilih isi konten, hingga pengaturan konten ke dalam design asset. Dan portofolio yang berhasil dibuat
                akan diunggah ke platform design terpopuler sebagai portofolio digital, sehingga bisa dilihat oleh
                prospect client di seluruh dunia.</p>
            <p class="m-0">Kelas ini cocok bagi Anda yang ingin membuat portofolio yang berkualitas. Mentor kami siap
                membantumu di grup konsultasi, dan jangan lupa tunjukkan karyamu, ya! Go register now and see you in
                class! </p>
            <h3 class="mt-4">Tools</h3>
            {{-- <div class="card mt-4 mb-4" style="width: 15rem;">
                <div class="card-body d-flex flex-column">
                    <img src="./image/adobe_xd.png" class="card-img-top-costum mt-3" alt="...">
                    <h5 class="card-title fw-bold mt-3">Adobe XD <br> Software Gratis</h5>
                    <a href="#" class="btn btn-primary btn-download mt-5 fw-bold">Download Now</a>
                </div>
            </div>
            <div class="card mt-4 ms-4 mb-4" style="width: 15rem;">
                <div class="card-body d-flex flex-column">
                    <img src="./image/adobe_premiere.png" class="card-img-top-costum mt-3" alt="...">
                    <h5 class="card-title fw-bold mt-3">Adobe Premiere Pro <br> Software Gratis</h5>
                    <a href="#" class="btn btn-primary btn-download mt-4 fw-bold">Download Now</a>
                </div>
            </div> --}}
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5d7008b34e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>