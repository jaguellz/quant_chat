<template>
    <div class="container">
        <!-- Card -->
        <a class="text-reset nav-link p-0 mb-6" href="#" v-for="chat in this.chats">
            <div class="card card-active-listener">
                <div class="card-body">

                    <div class="media">


                        <div class="avatar mr-5">
                            <img class="avatar-img" src="assets/images/avatars/11.jpg" alt="Bootstrap Themes">
                        </div>

                        <div class="media-body overflow-hidden">
                            <div class="d-flex align-items-center mb-1">
                                <h6 class="text-truncate mb-0 mr-auto">{{chat.name}}</h6>
                                <p class="small text-muted text-nowrap ml-4">{{chat.lastmsg}}</p>
                            </div>
                            <div class="text-truncate">Anna Bridges: Hey, Maher! How are you? The weather is great isn't it?</div>
                        </div>
                    </div>

                </div>


                <div class="badge badge-circle badge-primary badge-border-light badge-top-right">
                    <span>{{chat.unread}}</span>
                </div>

            </div>
        </a>
        <!-- Card -->

    </div>
</template>

<script>
    export default {
        props: {
            chats:'',
        },
        mounted() {
            console.log(this.users)
        }
    }
</script>