<template>
    <div class="container">

        <p @click="getData">TRytry</p>

        <!-- Card -->
        <a class="text-reset nav-link p-0 mb-6" v-for="chat in this.chatData" :href="chat.url">
            <div class="card card-active-listener">
                <div class="card-body">

                    <div class="media">


                        <div class="avatar mr-5">
                            <img class="avatar-img" src='https://userinyerface.com/images/avatar_placeholder.png' :alt=chat.name>
                        </div>

                        <div class="media-body overflow-hidden">
                            <div class="d-flex align-items-center mb-1">
                                <h6 class="text-truncate mb-0 mr-auto">{{chat.name}}</h6>
                                <p class="small text-muted text-nowrap ml-4">{{chat.time}}</p>
                            </div>
                            <div class="text-truncate" v-if="chat.lastmsgtext">{{chat.lastmsgfrom}}: {{chat.lastmsgtext}}</div>
                            <div class="text-truncate" v-else>This chat is empty</div>
                        </div>
                    </div>

                </div>


                <div class="badge badge-circle badge-primary badge-border-light badge-top-right" v-if="chat.unread > 0">
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
            url: ''
        },
        data() {
            return {
                hats_: '',
            }
        },
        computed: {
            chatData: {
                get() {
                    if (!this.hats_) {
                        this.hats_ = this.chats;
                    }
                    return this.hats_;
                },

                set(value) {
                    this.hats_ = value;
                }
            }
        },
        methods: {
            getData: function () {

                axios.post(this.url)
                    .then((response) =>{
                        this.chatData = [];
                        this.chatData = response.data;
                    });
            }
        },
        mounted() {
            setInterval(this.getData, 3000);
        }
    }
</script>
