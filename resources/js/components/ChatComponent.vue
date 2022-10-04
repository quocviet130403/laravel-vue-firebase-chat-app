<template>
    <section id="chat">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="content-msg"></div>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Nhập tin nhắn..." class="form-control"/>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
        </div>
    </section>
</template>

<style>
    #chat .tab-content .content-msg{
        height: 90vh;
    }
</style>

<script>
    import { mapGetters } from 'vuex';
    export default {
        name: "chat-component",
        mounted() {
            this.$store.dispatch('getListChat');
        },
        computed: {
            ...mapGetters({
                data: "data"
            })
        },
        data() {
            return {
                
            }
        },
        methods: {
           
        },
    }
</script>
