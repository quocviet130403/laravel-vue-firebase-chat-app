import Vue from 'vue';
import Vuex from 'vuex'
import axios from 'axios';

import getters from './getters';
import mutations from './mutations';
import * as actions from './actions';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {

    },
    state: {
        data: [],
    },
    getters,
    mutations,
    actions
});