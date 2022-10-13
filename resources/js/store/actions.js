import Vue from 'vue'
import { database } from '../firebase.js';
import { ref, set, child, get, onValue } from "firebase/database";

let loader = null;

function addLoader(){
    loader = Vue.prototype.$loading({
        lock: true,
        text: 'Loading',
        spinner: 'el-icon-loading',
        background: 'rgba(0, 0, 0, 0.7)'
    })
}

function removeLoader(){
    loader.close();
}

function notify(title,content){
    Vue.prototype.$notify({
        title: title == 200 ? 'Thành công' : 'Thất bại',
        dangerouslyUseHTMLString: true,
        message: content
    });
}


export const login = ({commit}, payload) => {
    addLoader()

    axios.post('/api/user/login',payload).then(res => {


        if(res.status == 200){
            if(res.data.errorCode == 200){
                location.reload()
            }
        }


        notify(res.data.errorCode,res.data.errorMsg);
    })
    removeLoader()

}

export const register = ({commit}, payload) => {
    addLoader()

    axios.post('/api/user',payload).then(res => {


        if(res.status == 200){
            notify(res.data.errorCode,res.data.errorMsg);
        }else{
            notify(500,'Vui lòng thử lại');
        }

        
    })
    removeLoader()

}

export const getListChat = ({commit}, payload) => {
    addLoader()

    axios.get('api/chatroom',payload).then(res => {

        if(res.status == 200){
            // return res.data;
            console.log(res.data);
            return commit("setData",res.data);
        }

    })
    removeLoader()

}

export const chatStore = ({commit}, payload) => {
    addLoader()

    set(ref(database, 'texts/' + Date.now()), {
        text: payload.content,
        chat_id: payload.id,
        user_id: payload.userId,
        time: Date.now()
    });

    removeLoader()
} 