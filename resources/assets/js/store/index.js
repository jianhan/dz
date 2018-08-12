import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'
import http_errors from './modules/http_errors'
import createLogger from '../plugins/logger'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        auth,
        http_errors
    },
    strict: debug,
    plugins: debug ? [createLogger()] : []
})