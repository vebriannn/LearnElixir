@extends('components.layouts.member.app')

@section('title', 'Landing Pages')

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('learnelixir/assets/css/user.css') }}">
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row top d-flex justify-content-between">
            <div class="col-lg-3 col-sm" style="width: 20%;">
                <div class="card-category d-flex flex-column">
                    <p class="mx-auto text-center pt-2 pb-1 border-bottom">Category</p>
                    <div class="checkbox ms-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                ALL
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Design Grafis
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                UI/UX Design
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 flex-warp row d-flex justify-content-between " id="course-container">
                {{-- <div class="col-lg-4 col-sm-6 mt-sm-4 mt-xl-0 mt-lg-0">
                    <a href="user_course.html" onclick="navigateToPage(event, 'user_course.html')">
                        <div class="card-course">
                            <img src="{{ asset('learnelixir/assets/image/Design.jpg') }}" class="img-card" alt=""
                                id="imgCourse">
                            <div class="container-card px-4 mt-2">
                                <p class="text-black" id="title">Design Grafis : Belajar Basic</p>
                                <div class="profile-card d-flex justify-content-start align-items-center mt-4 mb-4">
                                    <img src="{{ asset('learnelixir/assets/image/profile.png') }}" alt=""
                                        class="card-img-profile" id="profil-mentor">
                                    <p class="text-black m-0 p-0 ms-2" id="nama-mentor">Burhan jualan </p>
                                </div>
                                <div class="status d-flex">
                                    <img src="{{ asset('learnelixir/assets/image/Lesson.png') }}" alt="">
                                    <p class="text-black" id="lesson">4 Lesson</p>
                                    <img src="{{ asset('learnelixir/assets/image/Hours.png') }}"
                                        style="height: 20px; margin-top: -1px; margin-left: 10px;" alt="">
                                    <p class="text-black" id="durasi">4 Hours</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@push('prepend-script')
    <script src="{{ asset('learnelixir/assets/js/javascript.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush

@push('addon-script')
    <script>
        // var imagesCourse = document.getElementById('imgCourse');
        // var title = document.getElementById('title');
        // var profileMentor = document.getElementById('profil-mentor');
        // var namaMentor = document.getElementById('nama-mentor');
        // var lesson = document.getElementById('lesson');
        // var durasi = document.getElementById('durasi');

        function fetchAndDisplayCourses() {
            fetch('http://127.0.0.1:8000/api/v1/course')
                .then(response => response.json())
                .then(data => {
                    const courses = data.data;
                    const courseContainer = document.getElementById('course-container');

                    courses.forEach(courseData => {
                        courseData.course.forEach(course => {
                            const courseElement = document.createElement('div');
                            courseElement.className = 'col-lg-4 col-sm-6 mt-sm-4 mt-xl-0 mt-lg-0';
                            courseElement.innerHTML = `
                                <a href="user_course.html" onclick="navigateToPage(event, 'user_course.html')">
                                    <div class="card-course mb-5">
                                        <img src="${course.images}" class="img-card" alt="${course.title}" id="imgCourse">
                                        <div class="container-card px-4 mt-2">
                                            <p class="text-black" id="title">${course.title}</p>
                                            <div class="profile-card d-flex justify-content-start align-items-center mt-4 mb-4" >
                                                <img src="${courseData.avatar}" alt="${courseData.mentor} " class="card-img-profile rounded-5" id="profil-mentor">
                                                <div>
                                                    <p class="text-black m-0 p-0 ms-2 fw-bold" id="nama-mentor">${courseData.mentor}</p>
                                                    <p class="text-black m-0 p-0 ms-2" id="nama-mentor" style="font-size: 14px !important;" > ${courseData.divisi}</p>
                                                </div>
                                            </div>
                                            <div class="status d-flex">
                                                <img src="https://cdn-icons-png.flaticon.com/512/9800/9800294.png" alt="">
                                                <p class="text-black" id="lesson">${course.total_lesson} Lessons</p>
                                                <img src="https://cdn-icons-png.flaticon.com/512/2088/2088617.png" style="height: 20px; margin-top: -1px; margin-left: 10px;" alt="">
                                                <p class="text-black" id="durasi">${course.duration}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `;
                            courseContainer.appendChild(courseElement);
                        });
                    });
                })
                .catch(error => console.error('Error fetching courses:', error));
        }

        // Call the function to fetch and display courses
        fetchAndDisplayCourses();

        // Dummy function to prevent actual navigation during testing
        function navigateToPage(event, url) {
            event.preventDefault();
            console.log('Navigating to:', url);
        }
    </script>
@endpush
