@extends('layouts.app')

@section('content')
    <div class="layout">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="tab-content h-100" role="tablist">
                <div class="tab-pane fade h-100" id="tab-content-create-chat" role="tabpanel">
                    <div class="d-flex flex-column h-100">

                        <div class="hide-scrollbar">
                            <div class="container-fluid py-6">

                                <!-- Title -->
                                <h2 class="font-bold mb-6">Create group</h2>
                                <!-- Title -->

                                <!-- Search -->
                                <form class="mb-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                        <div class="input-group-append">
                                            <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Search -->

                                <!-- Tabs -->
                                <ul class="nav nav-tabs nav-justified mb-6" role="tablist">
                                    <li class="nav-item">
                                        <a href="#create-group-details" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">Details</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#create-group-members" class="nav-link" data-toggle="tab" role="tab" aria-selected="false">Members</a>
                                    </li>
                                </ul>
                                <!-- Tabs -->

                                <!-- Create chat -->
                                <div class="tab-content" role="tablist">

                                    <!-- Chat details -->
                                    <div id="create-group-details" class="tab-pane fade show active" role="tabpanel">
                                        <form action="#">
                                            <div class="form-group">
                                                <label class="small">Photo</label>
                                                <div class="position-relative text-center bg-secondary rounded p-6">
                                                    <div class="avatar bg-primary text-white mb-5">
                                                        <i class="icon-md fe-image"></i>
                                                    </div>

                                                    <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                    <input id="upload-chat-photo" class="d-none" type="file">
                                                    <label class="stretched-label mb-0" for="upload-chat-photo"></label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="small" for="new-chat-title">Name</label>
                                                <input class="form-control form-control-lg" name="new-chat-title" id="new-chat-title" type="text" placeholder="Group Name">
                                            </div>

                                            <div class="form-group">
                                                <label class="small" for="new-chat-topic">Topic (optional)</label>
                                                <input class="form-control form-control-lg" name="new-chat-topic" id="new-chat-topic" type="text" placeholder="Group Topic">
                                            </div>

                                            <div class="form-group mb-0">
                                                <label class="small" for="new-chat-description">Description</label>
                                                <textarea class="form-control form-control-lg" name="new-chat-description" id="new-chat-description" rows="6" placeholder="Group Description"></textarea>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- Chat details -->

                                    <!-- Chat Members -->
                                    <div id="create-group-members" class="tab-pane fade" role="tabpanel">
                                        <nav class="list-group list-group-flush mb-n6">

                                            <div class="mb-6">
                                                <small class="text-uppercase">A</small>
                                            </div>

                                            <!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">

                                                        <div class="avatar avatar-online mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                        </div>



                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">Anna Bridges</h6>
                                                            <small class="text-muted">Online</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-1" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-1"></label>
                                            </div>
                                            <!-- Friend -->

                                            <div class="mb-6">
                                                <small class="text-uppercase">B</small>
                                            </div>

                                            <!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">


                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                        </div>


                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">Brian Dawson</h6>
                                                            <small class="text-muted">last seen 2 hours ago</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-2" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-2"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-2"></label>
                                            </div>
                                            <!-- Friend -->

                                            <div class="mb-6">
                                                <small class="text-uppercase">L</small>
                                            </div>

                                            <!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">


                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                        </div>


                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">Leslie Sutton</h6>
                                                            <small class="text-muted">last seen 3 days ago</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-3" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-3"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-3"></label>
                                            </div>
                                            <!-- Friend -->

                                            <div class="mb-6">
                                                <small class="text-uppercase">M</small>
                                            </div>

                                            <!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">


                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                        </div>


                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">Matthew Wiggins</h6>
                                                            <small class="text-muted">last seen 3 days ago</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-4" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-4"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-4"></label>
                                            </div>
                                            <!-- Friend -->

                                            <div class="mb-6">
                                                <small class="text-uppercase">S</small>
                                            </div>

                                            <!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">


                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                        </div>


                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">Simon Hensley</h6>
                                                            <small class="text-muted">last seen 3 days ago</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-5" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-5"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-5"></label>
                                            </div>
                                            <!-- Friend -->

                                            <div class="mb-6">
                                                <small class="text-uppercase">W</small>
                                            </div>

                                            <!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">


                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                        </div>


                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">William Wright</h6>
                                                            <small class="text-muted">last seen 3 days ago</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-6" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-6"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-6"></label>
                                            </div>
                                            <!-- Friend --><!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">


                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                        </div>


                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">William Greer</h6>
                                                            <small class="text-muted">last seen 10 minutes ago</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-7" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-7"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-7"></label>
                                            </div>
                                            <!-- Friend -->

                                            <div class="mb-6">
                                                <small class="text-uppercase">Z</small>
                                            </div>

                                            <!-- Friend -->
                                            <div class="card mb-6">
                                                <div class="card-body">

                                                    <div class="media">


                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                                        </div>


                                                        <div class="media-body align-self-center mr-6">
                                                            <h6 class="mb-0">Zane Mayes</h6>
                                                            <small class="text-muted">last seen 3 days ago</small>
                                                        </div>

                                                        <div class="align-self-center ml-auto">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="id-user-8" type="checkbox">
                                                                <label class="custom-control-label" for="id-user-8"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Label -->
                                                <label class="stretched-label" for="id-user-8"></label>
                                            </div>
                                            <!-- Friend -->

                                        </nav>
                                    </div>
                                    <!-- Chat Members -->

                                </div>
                                <!-- Create chat -->

                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pb-6">
                            <div class="container-fluid">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Create group</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade h-100" id="tab-content-friends" role="tabpanel">
                    <div class="d-flex flex-column h-100">

                        <div class="hide-scrollbar">
                            <div class="container-fluid py-6">

                                <!-- Title -->
                                <h2 class="font-bold mb-6">Friends</h2>
                                <!-- Title -->

                                <!-- Search -->
                                <form class="mb-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                        <div class="input-group-append">
                                            <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Search -->

                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-block btn-secondary d-flex align-items-center mb-6" data-toggle="modal" data-target="#invite-friends">
                                    Invite friends
                                    <i class="fe-users ml-auto"></i>
                                </button>

                                <!-- Friends -->
                                <nav class="mb-n6">

                                    <div class="mb-6">
                                        <small class="text-uppercase">A</small>
                                    </div>

                                    <!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">

                                                <div class="avatar avatar-online mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                </div>


                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">Anna Bridges</h6>
                                                    <small class="text-muted">Online</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="chat-2.html" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend -->

                                    <div class="mb-6">
                                        <small class="text-uppercase">B</small>
                                    </div>

                                    <!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">


                                                <div class="avatar mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                </div>

                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">Brian Dawson</h6>
                                                    <small class="text-muted">last seen 2 hours ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="#" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend -->

                                    <div class="mb-6">
                                        <small class="text-uppercase">L</small>
                                    </div>

                                    <!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">


                                                <div class="avatar mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                </div>

                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">Leslie Sutton</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="#" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend -->

                                    <div class="mb-6">
                                        <small class="text-uppercase">M</small>
                                    </div>

                                    <!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">


                                                <div class="avatar mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                </div>

                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">Matthew Wiggins</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="#" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend -->

                                    <div class="mb-6">
                                        <small class="text-uppercase">S</small>
                                    </div>

                                    <!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">


                                                <div class="avatar mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                </div>

                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">Simon Hensley</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="#" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend -->

                                    <div class="mb-6">
                                        <small class="text-uppercase">W</small>
                                    </div>

                                    <!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">


                                                <div class="avatar mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                </div>

                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">William Wright</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="#" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend --><!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">


                                                <div class="avatar mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                </div>

                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">William Greer</h6>
                                                    <small class="text-muted">last seen 10 minutes ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="#" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend -->

                                    <div class="mb-6">
                                        <small class="text-uppercase">Z</small>
                                    </div>

                                    <!-- Friend -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media">


                                                <div class="avatar mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                                </div>

                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">Zane Mayes</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown z-index-max">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                New chat <span class="ml-auto fe-edit-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Link -->
                                            <a href="#" class="stretched-link"></a>

                                        </div>
                                    </div>
                                    <!-- Friend -->

                                </nav>
                                <!-- Friends -->

                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
                    <div class="d-flex flex-column h-100">

                        <div class="hide-scrollbar">
                            <div class="container-fluid py-6">

                                <!-- Title -->
                                <h2 class="font-bold mb-6">Chats</h2>
                                <div class="user">
                                    <p>User</p>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
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
                                </div>
                                <!-- Title -->



                                <!-- Chats -->
                                <chats :chats="{{$chats}}"></chats>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade h-100" id="tab-content-demos" role="tabpanel">
                    <div class="d-flex flex-column h-100">

                        <div class="hide-scrollbar">
                            <div class="container-fluid py-6">

                                <!-- Title -->
                                <h2 class="font-bold mb-6">Demos</h2>
                                <!-- Title -->

                                <!-- Search -->
                                <form class="mb-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                        <div class="input-group-append">
                                            <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Search -->

                                <!-- Card -->
                                <div class="card mb-6">
                                    <div class="card-body">

                                        <div class="media align-items-center">
                                            <div class="mr-5">
                                                <img src="assets/images/brand.svg" class="fill-primary" data-inject-svg="" alt="" style="height: 46px; width: 46px;">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-0">
                                                    <a href="documentation/index.html" class="text-basic-inverse stretched-link">Documentation</a>
                                                </h5>
                                                <p>Quick setup and build tools.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Card -->

                                <h5 class="my-6">Chat Pages:</h5>

                                <!-- Card -->
                                <div class="card mb-6">
                                    <img class="card-img-top" alt="" src="assets/images/demos/chat.jpg">
                                    <div class="card-body border-top">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mb-0">Light mode</h5>
                                            </div>
                                            <div class="align-self-center">
                                                <a href="../demo-light/" class="text-muted stretched-link">
                                                    <i class="fe-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mb-6">
                                    <img class="card-img-top" alt="" src="assets/images/demos/chat-dark.jpg">
                                    <div class="card-body border-top">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mb-0">Dark mode</h5>
                                            </div>
                                            <div class="align-self-center">
                                                <a href="../demo-dark/" class="text-muted stretched-link">
                                                    <i class="fe-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->

                                <h5 class="my-6">Account Pages:</h5>

                                <!-- Card -->
                                <div class="card mb-6">
                                    <img class="card-img-top" alt="" src="assets/images/demos/sign-in-dark.jpg">
                                    <div class="card-body border-top">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mb-0">Sign In</h5>
                                            </div>
                                            <div class="align-self-center">
                                                <a href="signin.html" class="text-muted stretched-link">
                                                    <i class="fe-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mb-6">
                                    <img class="card-img-top" alt="" src="assets/images/demos/sign-up-dark.jpg">
                                    <div class="card-body border-top">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mb-0">Sign Up</h5>
                                            </div>
                                            <div class="align-self-center">
                                                <a href="signup.html" class="text-muted stretched-link">
                                                    <i class="fe-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mb-6">
                                    <img class="card-img-top" alt="" src="assets/images/demos/password-reset-dark.jpg">
                                    <div class="card-body border-top">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mb-0">Password Reset</h5>
                                            </div>
                                            <div class="align-self-center">
                                                <a href="password-reset.html" class="text-muted stretched-link">
                                                    <i class="fe-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade h-100" id="tab-content-user" role="tabpanel">
                    <div class="d-flex flex-column h-100">

                        <div class="hide-scrollbar">
                            <div class="container-fluid py-6">

                                <!-- Title -->
                                <h2 class="font-bold mb-6">Profile</h2>
                                <!-- Title -->

                                <!-- Search -->
                                <form class="mb-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                        <div class="input-group-append">
                                            <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Search -->

                                <!-- Card -->
                                <div class="card mb-6">
                                    <div class="card-body">
                                        <div class="text-center py-6">
                                            <!-- Photo -->
                                            <div class="avatar avatar-xl mb-5">
                                                <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                                            </div>

                                            <h5>Matthew Wiggins</h5>
                                            <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mb-6">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Country</p>
                                                        <p>Warsaw, Poland</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-globe"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item px-0 py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Phone</p>
                                                        <p>+39 02 87 21 43 19</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-mic"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item px-0 py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Email</p>
                                                        <p>anna@gmail.com</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-mail"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item px-0 py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Time</p>
                                                        <p>10:03 am</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-clock"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mb-6">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 py-6">
                                                <a href="#" class="media text-muted">
                                                    <div class="media-body align-self-center">
                                                        Twitter
                                                    </div>
                                                    <i class="icon-sm fe-twitter"></i>
                                                </a>
                                            </li>

                                            <li class="list-group-item px-0 py-6">
                                                <a href="#" class="media text-muted">
                                                    <div class="media-body align-self-center">
                                                        Facebook
                                                    </div>
                                                    <i class="icon-sm fe-facebook"></i>
                                                </a>
                                            </li>

                                            <li class="list-group-item px-0 py-6">
                                                <a href="#" class="media text-muted">
                                                    <div class="media-body align-self-center">
                                                        Github
                                                    </div>
                                                    <i class="icon-sm fe-github"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card -->

                                <div class="form-row">
                                    <div class="col">
                                        <!-- Button -->
                                        <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                            Settings
                                            <span class="fe-settings ml-auto"></span>
                                        </button>
                                    </div>

                                    <div class="col">
                                        <!-- Button -->
                                        <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                            Logout
                                            <span class="fe-log-out ml-auto"></span>
                                        </button>
                                    </div>
                                </div>

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
                                            <img src="assets/images/avatars/11.jpg" class="avatar-img" alt="">
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

                    <!-- Chat: DropzoneJS container -->
                    <div class="chat-files hide-scrollbar px-lg-8">
                        <div class="container-xxl">
                            <div class="dropzone-previews-js form-row py-4"></div>
                        </div>
                    </div>
                    <!-- Chat: DropzoneJS container -->

                    <!-- Chat: Footer -->
                    <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                        <div class="container-xxl">

                            <form id="chat-id-1-form" action="assets/php/upload.php" data-emoji-form="">
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <div class="input-group">

                                            <!-- Textarea -->
                                            <textarea id="chat-id-1-input" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                            <!-- Emoji button -->
                                            <div class="input-group-append">
                                                <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                                    <img src="assets/images/smile.svg" data-inject-svg="" alt="">
                                                </button>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- Submit button -->
                                    <div class="col-auto">
                                        <button class="btn btn-ico btn-primary rounded-circle" type="submit">
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

                <!-- Chat Details -->
                <div id="chat-1-info" class="chat-sidebar">
                    <div class="d-flex h-100 flex-column">

                        <!-- Header -->
                        <div class="border-bottom py-4 py-lg-6">
                            <div class="container-fluid">

                                <ul class="nav justify-content-between align-items-center">
                                    <!-- Close sidebar -->
                                    <li class="nav-item list-inline-item">
                                        <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                                            <i class="icon-md fe-chevron-left"></i>
                                        </a>
                                    </li>

                                    <!-- Title(mobile) -->
                                    <li class="text-center d-block d-lg-none">
                                        <h6 class="mb-n2">Bootstrap Themes</h6>
                                        <small class="text-muted">Chat Details</small>
                                    </li>

                                    <!-- Dropdown -->
                                    <li class="nav-item list-inline-item">
                                        <div class="dropdown">
                                            <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-md fe-sliders"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Mute
                                                    <span class="ml-auto fe-bell"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete
                                                    <span class="ml-auto fe-trash-2"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!-- Header -->

                        <!-- Body -->
                        <div class="hide-scrollbar flex-fill">

                            <div class="border-bottom text-center py-9 px-10">
                                <!-- Photo -->
                                <div class="avatar avatar-xl mx-5 mb-5">
                                    <img class="avatar-img" src="assets/images/avatars/11.jpg" alt="">
                                </div>
                                <h5>Bootstrap Themes</h5>
                                <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p>
                            </div>

                            <!-- Navs -->
                            <ul class="nav nav-tabs nav-justified bg-light rounded-0" role="tablist">
                                <li class="nav-item">
                                    <a href="#chat-id-1-members" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">Members</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#chat-id-1-files" class="nav-link" data-toggle="tab" role="tab">Files</a>
                                </li>
                            </ul>
                            <!-- Navs -->

                            <div class="tab-content">
                                <!-- Members -->
                                <div id="chat-id-1-members" class="tab-pane fade show active">
                                    <ul class="list-group list-group-flush list-group-no-border-first">
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">


                                                <div class="avatar avatar-sm avatar-online mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                </div>


                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">Anna Bridges</a>
                                                    </h6>
                                                    <small class="text-muted">Online</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">


                                                <div class="avatar avatar-sm avatar-online mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                </div>


                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">Simon Hensley</a>
                                                    </h6>
                                                    <small class="text-muted">Online</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">



                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">William Wright</a>
                                                    </h6>
                                                    <small class="text-muted">last seen 7 hours ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">



                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">Leslie Sutton</a>
                                                    </h6>
                                                    <small class="text-muted">last seen 6 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">



                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">Matthew Wiggins</a>
                                                    </h6>
                                                    <small class="text-muted">last seen 2 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">



                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="Thomas Walker">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">Thomas Walker</a>
                                                    </h6>
                                                    <small class="text-muted">last seen 10 minutes ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">



                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/2.jpg" alt="Zane Mayes">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">Zane Mayes</a>
                                                    </h6>
                                                    <small class="text-muted">last seen 6 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">



                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">Brian Dawson</a>
                                                    </h6>
                                                    <small class="text-muted">last seen 2 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">



                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                </div>

                                                <div class="media-body">
                                                    <h6 class="mb-0">
                                                        <a href="#" class="text-reset">William Greer</a>
                                                    </h6>
                                                    <small class="text-muted">last seen 10 minutes ago</small>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Promote <span class="ml-auto fe-trending-up"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Restrict <span class="ml-auto fe-trending-down"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-user-x"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- Member -->

                                    </ul>
                                </div>
                                <!-- Members -->

                                <!-- Files -->
                                <div id="chat-id-1-files" class="tab-pane fade">
                                    <ul class="list-group list-group-flush list-group-no-border-first">
                                        <!-- File -->
                                        <li class="list-group-item py-6">
                                            <div class="media">

                                                <div class="icon-shape bg-primary text-white mr-5">
                                                    <i class="fe-paperclip"></i>
                                                </div>

                                                <div class="media-body align-self-center overflow-hidden">
                                                    <h6 class="text-truncate mb-0">
                                                        <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                    </h6>

                                                    <ul class="list-inline small mb-0">
                                                        <li class="list-inline-item">
                                                            <span class="text-muted">79.2 KB</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-muted text-uppercase">txt</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Download <span class="ml-auto fe-download"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Share <span class="ml-auto fe-share-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- File -->

                                        <!-- File -->
                                        <li class="list-group-item py-6">
                                            <div class="media">

                                                <div class="icon-shape bg-primary text-white mr-5">
                                                    <i class="fe-paperclip"></i>
                                                </div>

                                                <div class="media-body align-self-center overflow-hidden">
                                                    <h6 class="text-truncate mb-0">
                                                        <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                    </h6>

                                                    <ul class="list-inline small mb-0">
                                                        <li class="list-inline-item">
                                                            <span class="text-muted">79.2 KB</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-muted text-uppercase">psd</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Download <span class="ml-auto fe-download"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Share <span class="ml-auto fe-share-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- File -->

                                        <!-- File -->
                                        <li class="list-group-item py-6">
                                            <div class="media">

                                                <div class="icon-shape bg-primary text-white mr-5">
                                                    <i class="fe-paperclip"></i>
                                                </div>

                                                <div class="media-body align-self-center overflow-hidden">
                                                    <h6 class="text-truncate mb-0">
                                                        <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                    </h6>

                                                    <ul class="list-inline small mb-0">
                                                        <li class="list-inline-item">
                                                            <span class="text-muted">79.2 KB</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-muted text-uppercase">pdf</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Download <span class="ml-auto fe-download"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Share <span class="ml-auto fe-share-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- File -->

                                        <!-- File -->
                                        <li class="list-group-item py-6">
                                            <div class="media">

                                                <div class="icon-shape bg-primary text-white mr-5">
                                                    <i class="fe-paperclip"></i>
                                                </div>

                                                <div class="media-body align-self-center overflow-hidden">
                                                    <h6 class="text-truncate mb-0">
                                                        <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                    </h6>

                                                    <ul class="list-inline small mb-0">
                                                        <li class="list-inline-item">
                                                            <span class="text-muted">79.2 KB</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-muted text-uppercase">txt</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Download <span class="ml-auto fe-download"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Share <span class="ml-auto fe-share-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- File -->

                                        <!-- File -->
                                        <li class="list-group-item py-6">
                                            <div class="media">

                                                <div class="icon-shape bg-primary text-white mr-5">
                                                    <i class="fe-paperclip"></i>
                                                </div>

                                                <div class="media-body align-self-center overflow-hidden">
                                                    <h6 class="text-truncate mb-0">
                                                        <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                    </h6>

                                                    <ul class="list-inline small mb-0">
                                                        <li class="list-inline-item">
                                                            <span class="text-muted">79.2 KB</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-muted text-uppercase">pdf</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="align-self-center ml-5">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Download <span class="ml-auto fe-download"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Share <span class="ml-auto fe-share-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- File -->


                                    </ul>
                                </div>
                                <!-- Files -->
                            </div>
                        </div>
                        <!-- Body -->

                    </div>
                </div>
                <!-- Chat Details -->

                <!-- New members -->
                <div id="chat-1-members" class="chat-sidebar">
                    <div class="d-flex h-100 flex-column">

                        <!-- Header -->
                        <div class="border-bottom py-4 py-lg-6">
                            <div class="container-fluid">

                                <ul class="nav justify-content-between align-items-center">
                                    <!-- Close sidebar -->
                                    <li class="nav-item">
                                        <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                                            <i class="icon-md fe-chevron-left"></i>
                                        </a>
                                    </li>

                                    <!-- Title(mobile) -->
                                    <li class="text-center d-block d-lg-none">
                                        <h6 class="mb-n2">Bootstrap Themes</h6>
                                        <small class="text-muted">Add Members</small>
                                    </li>

                                    <!-- Dropdown -->
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-md fe-sliders"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Mute
                                                    <span class="ml-auto fe-bell"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete
                                                    <span class="ml-auto fe-trash-2"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!-- Header -->

                        <!-- Body -->
                        <div class="hide-scrollbar flex-fill">
                            <!-- Search -->
                            <div class="border-bottom py-7">
                                <div class="container-fluid">

                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for users..." aria-label="Search users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- Search -->

                            <!-- Members -->
                            <form action="#">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item py-4">
                                        <small class="text-uppercase">A</small>
                                    </li>

                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">


                                            <div class="avatar avatar-sm avatar-online mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                            </div>


                                            <div class="media-body">
                                                <h6 class="mb-0">Anna Bridges</h6>
                                                <small class="text-muted">Online</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-1" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-1"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-1"></label>
                                    </li>
                                    <!-- Member -->


                                    <li class="list-group-item py-4">
                                        <small class="text-uppercase">B</small>
                                    </li>

                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">



                                            <div class="avatar avatar-sm mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mb-0">Brian Dawson</h6>
                                                <small class="text-muted">last seen 2 hours ago</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-2" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-2"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-2"></label>
                                    </li>
                                    <!-- Member -->


                                    <li class="list-group-item py-4">
                                        <small class="text-uppercase">L</small>
                                    </li>

                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">



                                            <div class="avatar avatar-sm mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mb-0">Leslie Sutton</h6>
                                                <small class="text-muted">last seen 3 days ago</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-3" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-3"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-3"></label>
                                    </li>
                                    <!-- Member -->


                                    <li class="list-group-item py-4">
                                        <small class="text-uppercase">M</small>
                                    </li>

                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">



                                            <div class="avatar avatar-sm mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mb-0">Matthew Wiggins</h6>
                                                <small class="text-muted">last seen 3 days ago</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-4" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-4"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-4"></label>
                                    </li>
                                    <!-- Member -->


                                    <li class="list-group-item py-4">
                                        <small class="text-uppercase">S</small>
                                    </li>

                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">



                                            <div class="avatar avatar-sm mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mb-0">Simon Hensley</h6>
                                                <small class="text-muted">last seen 3 days ago</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-5" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-5"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-5"></label>
                                    </li>
                                    <!-- Member -->


                                    <li class="list-group-item py-4">
                                        <small class="text-uppercase">W</small>
                                    </li>

                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">



                                            <div class="avatar avatar-sm mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mb-0">William Wright</h6>
                                                <small class="text-muted">last seen 3 days ago</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-6" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-6"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-6"></label>
                                    </li>
                                    <!-- Member -->
                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">



                                            <div class="avatar avatar-sm mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mb-0">William Greer</h6>
                                                <small class="text-muted">last seen 10 minutes ago</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-7" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-7"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-7"></label>
                                    </li>
                                    <!-- Member -->


                                    <li class="list-group-item py-4">
                                        <small class="text-uppercase">Z</small>
                                    </li>

                                    <!-- Member -->
                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">



                                            <div class="avatar avatar-sm mr-5">
                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mb-0">Zane Mayes</h6>
                                                <small class="text-muted">last seen 3 days ago</small>
                                            </div>

                                            <div class="align-self-center ml-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="id-add-user-chat-1-user-8" type="checkbox">
                                                    <label class="custom-control-label" for="id-add-user-chat-1-user-8"></label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Label -->
                                        <label class="stretched-label" for="id-add-user-chat-1-user-8"></label>
                                    </li>
                                    <!-- Member -->

                                </ul>
                            </form>
                            <!-- Members -->
                        </div>
                        <!-- Body -->

                        <!-- Button -->
                        <div class="border-top py-7">
                            <div class="container-fluid">
                                <button class="btn btn-lg btn-block btn-primary d-flex align-items-center" type="submit">
                                    Add members
                                    <span class="fe-user-plus ml-auto"></span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- New members -->

                <!-- User's details -->
                <div id="chat-1-user-profile" class="chat-sidebar">
                    <div class="d-flex h-100 flex-column">

                        <!-- Header -->
                        <div class="border-bottom py-4 py-lg-6">
                            <div class="container-fluid">

                                <ul class="nav justify-content-between align-items-center">
                                    <!-- Close sidebar -->
                                    <li class="nav-item list-inline-item">
                                        <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                                            <i class="icon-md fe-chevron-left"></i>
                                        </a>
                                    </li>

                                    <!-- Title(mobile) -->
                                    <li class="text-center d-block d-lg-none">
                                        <h6 class="mb-n2">William Wright</h6>
                                        <small class="text-muted">User Details</small>
                                    </li>

                                    <!-- Dropdown -->
                                    <li class="nav-item list-inline-item">
                                        <div class="dropdown">
                                            <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-md fe-sliders"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Mute <span class="ml-auto fe-bell"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!-- Header -->

                        <!-- Body -->
                        <div class="hide-scrollbar flex-fill">

                            <div class="border-bottom text-center py-9 px-10">
                                <!-- Photo -->
                                <div class="avatar avatar-xl mx-5 mb-5">
                                    <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="">
                                    <div class="badge badge-sm badge-pill badge-primary badge-border-basic badge-top-right">
                                        <span class="text-uppercase">Pro</span>
                                    </div>
                                </div>
                                <h5>William Wright</h5>
                                <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p>
                            </div>

                            <ul class="list-group list-group-flush mb-8">
                                <li class="list-group-item py-6">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="small text-muted mb-0">Country</p>
                                            <p>Warsaw, Poland</p>
                                        </div>
                                        <i class="text-muted icon-sm fe-globe"></i>
                                    </div>
                                </li>

                                <li class="list-group-item py-6">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="small text-muted mb-0">Phone</p>
                                            <p>+39 02 87 21 43 19</p>
                                        </div>
                                        <i class="text-muted icon-sm fe-mic"></i>
                                    </div>
                                </li>

                                <li class="list-group-item py-6">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="small text-muted mb-0">Email</p>
                                            <p>anna@gmail.com</p>
                                        </div>
                                        <i class="text-muted icon-sm fe-mail"></i>
                                    </div>
                                </li>

                                <li class="list-group-item py-6">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="small text-muted mb-0">Time</p>
                                            <p>10:03 am</p>
                                        </div>
                                        <i class="text-muted icon-sm fe-clock"></i>
                                    </div>
                                </li>
                            </ul>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-6">
                                    <a href="#" class="media text-muted">
                                        <div class="media-body align-self-center">
                                            Twitter
                                        </div>
                                        <i class="icon-sm fe-twitter"></i>
                                    </a>
                                </li>

                                <li class="list-group-item py-6">
                                    <a href="#" class="media text-muted">
                                        <div class="media-body align-self-center">
                                            Facebook
                                        </div>
                                        <i class="icon-sm fe-facebook"></i>
                                    </a>
                                </li>

                                <li class="list-group-item py-6">
                                    <a href="#" class="media text-muted">
                                        <div class="media-body align-self-center">
                                            Github
                                        </div>
                                        <i class="icon-sm fe-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Body -->

                        <!-- Button -->
                        <div class="border-top py-7">
                            <div class="container-fluid">
                                <button class="btn btn-lg btn-block btn-primary d-flex align-items-center" type="submit">
                                    Add friend
                                    <span class="fe-user-plus ml-auto"></span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- User's details -->

            </div>
            <!-- Chat -->

        </div>
        <!-- Main Content -->

        <!-- Active Users: Sidebar -->

        <!-- Active Users: Sidebar -->

    </div>
@endsection