@extends('layouts.layouts')
@section('content')
    @auth
        <div class="d-flex justify-content-end">
            <a href="/posts/create" class="btn btn-primary mt-3">Ajouter un nouvel article</a>
        </div>
    @endauth
    <div class="row mt-5">
        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-1 align-items-stretch pb-5">
                @forelse ($posts as $post)
                    <div class="col mb-3">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow bg-secondary"
                            style="background-image:linear-gradient(45deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.7)), url({{ $post->image_desc_small }});background-position:center center;background-size:cover;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <a href="/posts/{{ $post->id }}" class="text-decoration-none text-white">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $post->title }}</h2>
                                </a>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg viewBox="0 0 64 64" width="64" height="64">
                                            <linearGradient id="gPWjxlu7lDdzZroFFR7GZa" x1="32" x2="32" y1="9.083"
                                                y2="54.676" gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                                <stop offset="0" stop-color="#1a6dff" />
                                                <stop offset="1" stop-color="#c822ff" />
                                            </linearGradient>
                                            <path fill="url(#gPWjxlu7lDdzZroFFR7GZa)"
                                                d="M50,55H14c-2.757,0-5-2.243-5-5V14c0-2.757,2.243-5,5-5h36c2.757,0,5,2.243,5,5v36 C55,52.757,52.757,55,50,55z M14,11c-1.654,0-3,1.346-3,3v36c0,1.654,1.346,3,3,3h36c1.654,0,3-1.346,3-3V14c0-1.654-1.346-3-3-3H14 z" />
                                            <linearGradient id="gPWjxlu7lDdzZroFFR7GZb" x1="32" x2="32" y1="19" y2="45"
                                                gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                                <stop offset="0" stop-color="#6dc7ff" />
                                                <stop offset="1" stop-color="#e6abff" />
                                            </linearGradient>
                                            <path fill="url(#gPWjxlu7lDdzZroFFR7GZb)"
                                                d="M43,29h-1c-1.11,0-2-0.9-2-2c0-4.4-3.6-8-8-8h-5c-4.4,0-8,3.6-8,8v10c0,4.4,3.6,8,8,8h10 c4.4,0,8-3.6,8-8v-6C45,29.9,44.1,29,43,29z M27,25h5c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2h-5c-1.1,0-2-0.9-2-2C25,25.9,25.9,25,27,25z M37,39H27c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2C39,38.1,38.1,39,37,39z" />
                                        </svg>
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill"></use>
                                        </svg>
                                        <small>Earth</small>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3"></use>
                                        </svg>
                                        <small>{{ $post->created_at->diffForHumans() }}</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="alert alert-info">Pas d'article d'insponible</div>
                @endforelse
            </div>
        </div>
        <div class="col-md-3">
            <div class="position-sticky" style="top: 2rem;">
                <div class="flex-shrink-0 px-3 mb-3 bg-light rounded" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <svg class="bi me-2" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#home-collapse" aria-expanded="true">
                                Home
                            </button>
                            <div class="collapse show" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                                    <li><a href="#" class="link-dark rounded">Updates</a></li>
                                    <li><a href="#" class="link-dark rounded">Reports</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                                    <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                    <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                    <li><a href="#" class="link-dark rounded">Annually</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#orders-collapse" aria-expanded="false">
                                Orders
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New</a></li>
                                    <li><a href="#" class="link-dark rounded">Processed</a></li>
                                    <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                    <li><a href="#" class="link-dark rounded">Returned</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New...</a></li>
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
