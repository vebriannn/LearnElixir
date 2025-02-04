<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Elixir | Play Video</title>
    <link rel="stylesheet" href="{{ asset('learnelixir/assets/css/user_video.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>


    <div class="custom-container" id="content">
        <h3 class=" mt-5">Belajar Livewire Menengah: Membuat Aplikasi Manajemen Karyawan Sederhana</h3>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card costum-card">
                    <p class="text-center fs-5 text-white fw-bold pt-2 border-bottom">Materi</p>
                    <div class="d-grid gap-2 px-3">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Awal
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <button
                                            class="btn btn-primary btn-video mx-auto mt-3 d-flex justify-content-between"
                                            type="button">
                                            <div class="d-flex play">
                                                <img src="./image/play.png" alt="">
                                                <p class="ms-2 my-auto opacity-75">Trailer</p>
                                            </div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </button>
                                        <button
                                            class="btn btn-primary btn-video mx-auto mt-3 d-flex justify-content-between"
                                            type="button">
                                            <div class="d-flex play">
                                                <img src="./image/play.png" alt="">
                                                <p class="ms-2 my-auto opacity-75">Trailer</p>
                                            </div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Properties
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <button
                                            class="btn btn-primary btn-video mx-auto mt-3 d-flex justify-content-between"
                                            type="button">
                                            <div class="d-flex play">
                                                <img src="./image/play.png" alt="">
                                                <p class="ms-2 my-auto opacity-75">Trailer</p>
                                            </div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </button>
                                        <button
                                            class="btn btn-primary btn-video mx-auto mt-3 d-flex justify-content-between"
                                            type="button">
                                            <div class="d-flex play">
                                                <img src="./image/play.png" alt="">
                                                <p class="ms-2 my-auto opacity-75">Trailer</p>
                                            </div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 d-flex flex-column">
                <img src="{{ asset('learnelixir/assets/image/Design.jpg') }}" alt="">
                <button class="btn btn-primary btn-play mt-3 mb-3 ms-auto">Complete</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>