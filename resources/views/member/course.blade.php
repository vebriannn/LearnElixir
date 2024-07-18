@extends('components.layouts.member.app')

@section('title', 'Course')

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('learnelixir/assets/css/user.css') }}">
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row top d-flex justify-content-between">
            <div class="col-lg-3 col-sm" style="width: 20%;">
                <div class="card-category d-flex flex-column">
                    <p class="mx-auto text-center pt-2 pb-1 border-bottom">Category</p>
                    <div class="checkbox ms-3" id="kategori-container">
                    </div>
                </div>
            </div>
            <div class="col-9 flex-warp row d-flex" id="course-container">
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
                                <a href="#" onclick="getLinkCourse(event, '${course.slug}')">
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
    </script>

    <script>
        function fetchAndDisplayKategori() {
            fetch('http://127.0.0.1:8000/api/v1/kategori')
                .then(response => response.json())
                .then(data => {
                    const kategori = data.data;
                    const kategoriContainer = document.getElementById('kategori-container');
                    kategori.forEach((kategoriData, index) => {
                        const kategoriElement = document.createElement('div');
                        kategoriElement.className = 'form-check';
                        kategoriElement.innerHTML = `
                        <input class="form-check-input" type="radio" name="kategoriGroup" id="kategori-${index}">
                            <label class="form-check-label" >
                                ${kategoriData.kategori}
                            </label>
                        `
                        kategoriContainer.appendChild(kategoriElement);

                        if (kategoriData.id === 0) {
                            const defaultRadio = document.getElementById(`kategori-0`);
                            if (defaultRadio) {
                                defaultRadio.checked = true;
                            }
                        }

                        const radioInput = document.getElementById('kategori-' + index);
                        radioInput.addEventListener('click', function() {
                            getDataFilter(kategoriData.id);
                        });
                    });
                })
                .catch(error => console.error('Error fetching kategori:', error));
        }

        function getDataFilter(id) {
            // hapus element sebelumnya
            const courseContainer = document.getElementById('course-container');
            while (courseContainer.firstChild) {
                courseContainer.removeChild(courseContainer.firstChild);
            }

            fetch('http://127.0.0.1:8000/api/v1/course?id=' + id)
                .then(response => response.json())
                .then(data => {
                    const courses = data.data;
                    courses.forEach(courseData => {
                        const courseElement = document.createElement('div');
                        courseData.course.forEach(course => {
                            courseElement.className = 'col-lg-4 col-sm-6 mt-sm-4 mt-xl-0 mt-lg-0';
                            courseElement.innerHTML = `
                                <a href="#" onclick="getLinkCourse(event, '${course.slug}')">
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
                    })
                })
                .catch(error => console.error('Error fetching courses:', error));
        }


        fetchAndDisplayKategori()
    </script>

    <script>
        function getLinkCourse(event, slug) {
            event.preventDefault();
            if (slug) {
                const url = `/member/join/kelas/${slug}`;
                window.location.href = url;
            } else {
                console.error('Slug tidak tersedia.');
            }
        }
    </script>
@endpush
