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
                                <h2 class="font-bold mb-6">Chats</h2>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                User: {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                                @if(Auth::user()->is_admin == 1)
                                                    <a class="dropdown-item" href="{{route('register')}}">Register user</a>
                                                @endif
                                            </div>
                                        </li>
                                    </ul>
                                <!-- Title -->



                                <!-- Chats -->
                                <chats :chats="{{$chats}}"></chats>
                                <newchats :users="{{$users}}"></newchats>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Main Content -->
        <div class="main main-visible" data-mobile-height="">

            <!-- Chat -->
            <div id="chat-1" class="chat dropzone-form-js" data-dz-url="some.php">

                <!-- Chat: body -->
                <div class="chat-body">

                    <!-- Chat: Header -->
                    <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                        <div class="container-xxl">

                            <div class="row align-items-center">

                                <!-- Close chat(mobile) -->
                                <div class="col-3 d-xl-none">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a class="text-muted px-0" href="#" data-chat="open">
                                                <i class="icon-md fe-chevron-left"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Chat photo -->
                                <div class="col-6 col-xl-6">
                                    <div class="media text-center text-xl-left">
                                        <div class="avatar avatar-sm d-none d-xl-inline-block mr-5">
                                            <img src="https://userinyerface.com/images/avatar_placeholder.png" class="avatar-img" alt="">
                                        </div>

                                        <div class="media-body align-self-center text-truncate">
                                            <h5 class="text-truncate">{{$chat['name']}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .row -->

                        </div>
                    </div>
                    <!-- Chat: Header -->

                    <!-- Chat: Search -->
                    <div class="collapse border-bottom px-lg-8" id="chat-1-search">
                        <div class="container-xxl py-4 py-lg-6">

                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Search this chat" aria-label="Search this chat">

                                <div class="input-group-append">
                                    <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Chat: Search -->

                    <!-- Chat: Content-->
                    <div class="chat-content px-lg-8">
                        <div class="container-xxl py-6 py-lg-10">
                            <chat :msgs="{{$msgs}}"></chat>
                        </div>

                        <!-- Scroll to end -->
                        <div class="end-of-chat"></div>
                    </div>
                    <!-- Chat: Content -->

                    <!-- Chat: Footer -->
                    <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                        <div class="container-xxl">

                            <form type="POST" id="chat-id-1-form" action={{route('text', $chat['id'])}} data-emoji-form="">
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <div class="input-group">

                                            <!-- Textarea -->
                                            <textarea id="chat-id-1-input" name='text' class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                        </div>

                                    </div>

                                    <!-- Submit button -->
                                    <div class="col-auto">
                                        <button class="btn btn-ico btn-primary rounded-circle" id="textto" type="submit" name="user_id" value="{{Auth::id()}}">
                                            <span class="fe-send"></span>
                                        </button>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- Chat: Footer -->
                </div>
                <!-- Chat: body -->
                    </div>
                </div>
                <!-- User's details -->
            </div>
            <!-- Chat -->

@endsection