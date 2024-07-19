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
        <h3 class=" mt-5">{{ $course->title }}</h3>
        <div class="row mt-4">
            <div class="col-8">
                <img src="{{ asset('storage/courseImages/' . $course->images) }}" alt="">
            </div>
            <div class="col-4">
                <div class="card costum-card ms-5">
                    <div class="card-body px-3">
                        <h6 class="fw-bolder">{{ $course->total_lesson }} Lesson - {{ $course->duration }}</h6>
                        <div class="d-grid gap-2">
                            @foreach ($course->lessons as $lesson)
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item mt-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapse-{{ $lesson->id }}"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                {{ $lesson->title_lesson }}
                                            </button>
                                        </h2>
                                        @foreach ($sources as $source)
                                            <div id="panelsStayOpen-collapse-{{ $lesson->id }}"
                                                class="accordion-collapse collapse ">
                                                @if ($source !== null)
                                                    @if ($source->id_lesson == $lesson->id)
                                                        <div class="accordion-body">
                                                            <div
                                                                class="btn btn-primary btn-video mx-auto mt-3 d-flex justify-content-between">
                                                                <div class="d-flex play">
                                                                    <img src="{{ asset('learnelixir/assets/image/play.png') }}"
                                                                        alt="">
                                                                    <p class="ms-2 my-auto opacity-75">
                                                                        {{ $source->name_source }}</p>
                                                                </div>
                                                                <p class="my-auto opacity-75">{{ $source->time_source }}</p>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="btn btn-primary w-100 pt-3 pb-3 mt-3" href="">Mulai Tonton</a>
                    </div>
                </div>
            </div>
            <h3 class="mt-4">About</h3>
            <p class="m-0 pb-4">{{ $course->deskripsi }}</p>

            {{-- <h3 class="mt-4">Tools</h3> --}}
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
