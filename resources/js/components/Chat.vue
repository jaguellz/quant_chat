<template>
    <div class="container">
        <!-- Message from  -->
        <div v-for="msg in this.chatData">
        <div class="message" v-if="msg.type === 1">
            <!-- Avatar -->
            <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                <img class="avatar-img" src="https://userinyerface.com/images/avatar_placeholder.png" alt="">
            </a>

            <!-- Message: body -->
            <div class="message-body">

                <!-- Message: row -->
                <div class="message-row">
                    <div class="d-flex align-items-center">

                        <!-- Message: content -->
                        <div class="message-content bg-light">
                            <div>{{msg.text}}</div>

                            <div class="mt-1">
                                <small class="opacity-65">{{msg.time}}</small>
                            </div>
                        </div>
                        <!-- Message: content -->

                    </div>
                </div>
                <!-- Message: row -->

            </div>
            <!-- Message: Body -->
        </div>
        <!-- Message from -->
        <!-- Message to -->
        <div class="message message-right" v-if="msg.type === 0">
            <!-- Avatar -->
            <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
            </div>

            <!-- Message: body -->
            <div class="message-body">

                <!-- Message: row -->
                <div class="message-row">
                    <div class="d-flex align-items-center justify-content-end">

                        <!-- Message: content -->
                        <div class="message-content bg-primary text-white">
                            <div>{{msg.text}}</div>

                            <div class="mt-1">
                                <small class="opacity-65">{{msg.time}}</small>
                            </div>
                        </div>
                        <!-- Message: content -->

                    </div>
                </div>
                <!-- Message: row -->

            </div>
            <!-- Message: body -->
        </div>
        <!-- Message to -->
    </div>
    </div>
</template>

<script>
    export default {
            props: {
                url: ''
            },
            data() {
                return {
                    chatData: '',
                }
            },
            methods: {
                getData: function () {
                    axios.post(this.url)
                        .then((response) =>{
                            this.chatData = response.data;
                        });
                }
            },
            mounted() {
                setInterval(this.getData, 1000);
            }
        }
</script>