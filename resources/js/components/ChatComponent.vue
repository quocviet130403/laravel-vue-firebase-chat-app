<template>
    <section id="chat">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation" v-for="item in data">
            <button :class="'nav-link' + (item.id == 1 ? ' active' : '')" id="home-tab" data-bs-toggle="tab" :data-bs-target="'#' + item.name" type="button" role="tab" :aria-controls="item.name" aria-selected="true">{{ item.name }}</button>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div v-for="item in data" :class="'tab-pane fade' +  (item.id == 1 ? ' show active' : '')" :id="item.name" role="tabpanel" aria-labelledby="home-tab">
                <div class="content-msg">
                    <span v-for="msg in messages" v-if="msg.user_id == id" class="me">{{msg.text}}</span>
                    <span v-else>{{msg.text}}</span>
                </div>
                <form @submit.prevent="chating(item.id)">
                    <div class="form-group">
                        <input type="text" placeholder="Nhập tin nhắn..." v-model="content" class="form-control"/>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<style>
    #chat .tab-content .content-msg{
        height: 90vh;
        padding: 20px;
        overflow-y: scroll;
    }
    #chat .tab-content .content-msg span{
        display: block;
        background-color:#17a2b8;
        padding: 10px;
        border-radius:5px;
        width: max-content;
        max-width: 600px;
        margin-bottom:10px;
        color:#fff;
    }
    #chat .tab-content .content-msg span.me{
        margin-right: 0;
        margin-left: auto;
    }
</style>

<script>
    import { mapGetters } from 'vuex';
    import { database } from '../firebase.js';
    import { ref, set, child, get, onValue } from "firebase/database";
    export default {
        name: "chat-component",
        props: {
            id:String
        },
        mounted() {
            this.$store.dispatch('getListChat');
            this.getListText();
        },
        computed: {
            ...mapGetters({
                data: "data"
            })
        },
        data() {
            return {
                content: null,
                messages: []
            }
        },
        methods: {
           chating(id){
            this.$store.dispatch('chatStore',{id, content: this.content, userId: this.id});
            this.content = null
           },
           getListText(){

                onValue(ref(database, 'texts'), (data) => {
                    this.messages = [];
                    data.forEach(data => {
                        this.messages.push(data.val())
                    })
                })

            }
        },
    }
</script>
