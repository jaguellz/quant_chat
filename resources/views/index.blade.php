@extends('layouts.app')

@section('content')
    <div class="layout">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="tab-content h-100" role="tablist">
                <div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
                    <div class="d-flex flex-column h-100">
                        <div class="hide-scrollbar">
                            <div class="container-fluid py-6">
                                <!-- Title -->
                                <h2 class="font-bold mb-6">Чаты</h2>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Пользователь: {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Выйти
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                                @if(Auth::user()->is_admin == 1)
                                                    <a class="dropdown-item" href="{{route('register')}}">Зарегестрировать пользователя</a>
                                                @endif
                                            </div>
                                        </li>
                                    </ul>
                                <!-- Title -->



                                <!-- Chats -->
                                <chats :chats="{{$chats}}" :url="'{{route('chatApi')}}'"></chats>
                                <newchats :users="{{$users}}"></newchats>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Main Content -->
        <div class="main" data-mobile-height="">

            <!-- Default Page -->
            <div class="chat flex-column justify-content-center text-center">
                <div class="container-xxl">

                    <div class="avatar avatar-lg mb-5">
                        <img class="avatar-img" src="assets/images/avatars/avatar.png" alt="">
                    </div>

                    <h6>Привет, {{Auth::user()->name}}!</h6>
                    <p>Выберите чат для начала общения!</p>
                </div>
            </div>
            <!-- Default Page -->

        </div>
        <!-- Main Content -->

        <!-- Active Users: Sidebar -->

        <!-- Active Users: Sidebar -->

    </div>
@endsection