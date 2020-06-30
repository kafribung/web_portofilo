@extends('layouts.master')
@section('title', 'Web Statis Kafri Bung')
@section('content')
    <!--header -->
    <header id="header" class="container-fluid bg-dark">
        <div class="text-center">
            <div class="row">
                <div class="col-sm-12 text-white">
                    <img class="rounded-circle mt-5 profil" src=" {{ asset('assets/img/profile/1.jpeg')}}" alt="kafri bung" />
                    <h1>Kafri Bung</h1>
                    <p>Web Dev | Dreamer | Freak Thinker</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="https://www.facebook.com/KafriTaziu" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/kafri_bung/" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://www.linkedin.com/in/kafri-kafriansyah-633359179/" target="_blank" class="fa fa-linkedin"></a>
                    <a href="https://github.com/kafribung?" target="_blank" class="fa fa-github"></a>
                    <a href="https://twitter.com/Kafri_Bung" target="_blank" class="fa fa-twitter"></a>
                </div>
            </div>
    </header>
    <!-- ------------------------------END header -->

    <!-- section -->
    <section id="about" class="bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h2 class=" mt-4 tebal">About</h2>
                    <hr color="#d9ffcc" class="mt-0" />
                </div>
            </div>

            <div class="row mt-2 text-justify">
                <div class="col-sm 4">
                    <p class="deskripsi">
                        Nama saya Kafriansyah, saya sering di sapa Kafri Bung. Berasal dari Mamuju Sulawesi Barat. Sekarang saya menempuh pendidikan di Universitas Islam Negeri Alauddin Makassar jurusan Sistem Informasi. Selain fokus kuliah saya bekerja sebagai freelancer web
                        developer. Cita-cita saya ingin menjadi dosen IT sekaligus menjadi developer dan sistem analis. Motto hidup saya jadikan akhirat di hatimu, dunia di tanganmu dan kematian di pelupuk matamu.Terus belajar dan berdoa.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer id="footer" class="align-items-end mt">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 mt-3">
                    <p>&copy; Copyright
                        <script>
                            document.write(new Date().getFullYear())
                        </script> | built by<i class="fa fa-heart " aria-hidden="true "></i>Kafri Bung Mamuju </p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-12 mb-2">
                    <a href="https://www.kafriansyah.com" target="_blank" class="btn btn-danger btn-sm ">About Me</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
@endsection