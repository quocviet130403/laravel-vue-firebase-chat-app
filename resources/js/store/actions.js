import Vue from 'vue'
// import {firebase} from '../firebase.js'

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
    axios.post('/api/user/login',payload).then(res => {

        addLoader()

        if(res.status == 200){
            if(res.data.errorCode == 200){
                location.reload()
            }
        }

        removeLoader()

        notify(res.data.errorCode,res.data.errorMsg);
    })
}

export const register = ({commit}, payload) => {
    axios.post('/api/user',payload).then(res => {

        addLoader()

        if(res.status == 200){
            notify(res.data.errorCode,res.data.errorMsg);
        }else{
            notify(500,'Vui lòng thử lại');
        }

        removeLoader()
        
    })
}