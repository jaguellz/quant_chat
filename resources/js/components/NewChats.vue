<template>
    <div class="container">
        <!-- Card -->
        <a class="text-reset nav-link p-0 mb-6" v-for="user in this.users" :href="user.url">
            <div class="card card-active-listener">
                <div class="card-body">

                    <div class="media">


                        <div class="avatar mr-5">
                            <img class="avatar-img" src='https://userinyerface.com/images/avatar_placeholder.png' alt="Bootstrap Themes">
                        </div>

                        <div class="media-body overflow-hidden">
                            <div class="d-flex align-items-center mb-1">
                                <h6 class="text-truncate mb-0 mr-auto">{{user.name}}</h6>
                            </div>
                            <div class="text-truncate">Create new chat with {{user.name}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </a>
        <!-- Card -->

    </div>
</template>

<script>
    export default {
        props: {
            users:'',
        },
        mounted() {
            console.log(this.users)
        }
    }
</script>