import Vue from 'vue'

let loader = null;

function addLoader(){
    console.log(Vue.prototype);
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


export const login = ({commit}, payload) => {
    // axios.post('/api/user',payload).then(res => {
    //     if(res.status == 200){
    //         if(res.data.errorCode == 200){
    //             console.log(res.data.data);
    //         }
    //     }
    // })
}

export const register = ({commit}, payload) => {
    axios.post('/api/user',payload).then(res => {

        addLoader()

        if(res.status == 200){
            if(res.data.errorCode == 200){
                console.log(res.data.data);
            }
        }

        removeLoader()
    })
}