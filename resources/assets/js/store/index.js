import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'
import httpErrors from './modules/http_errors'
import createLogger from '../plugins/logger'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        auth,
        httpErrors
    },
    strict: debug,
    plugins: debug ? [createLogger()] : []
})