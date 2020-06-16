<template>
    <div class="container">
        <div class="container-xxl py-6 py-lg-10">


            <!-- Message -->
            <div class="message message-right" v-for="msg in this.msgs">
                <!-- Avatar -->
                <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                    <img class="avatar-img" :src="msg.url" alt="">
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
            <!-- Message -->
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            msgs:'',
        },
        mounted() {
            console.log(this.msgs)
        }
    }
</script>
