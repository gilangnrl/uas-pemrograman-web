@extends('layouts.public.master')

@section('content')
    <div>
        <div class="img-cover">
            <img class="center-cropped" src="http://127.0.0.1:8000/storage/jpg/2022-04-06-15-45-26.jpg" alt="">
        </div>
        <div class="profile-section-wrapper">
            <div class="profile-section">

                <img class="avatar-rounded center-cropped" src="http://127.0.0.1:8000/storage/png/2022-02-15-05-21-39.png"
                    height="200px" width="200px" alt="">
                <div class="flex profile-detail">
                    <h1>
                        Hello My Name Is Gilang Nuril Haqim
                    </h1>
                    <div class="flex social">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="profile-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus tortor eu diam
                            convallis porta. Aliquam ac viverra leo. Integer sagittis, tellus feugiat semper mollis, est sem
                            tempor dui, et gravida arcu lectus gravida nulla. Morbi laoreet iaculis turpis, id posuere
                            tellus commodo vel. Nunc id egestas lacus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
