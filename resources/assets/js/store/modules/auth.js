import * as mutationTypes from './mutation_types'

// initial state
const state = {
    // authentication
    user: null,
    isLoggingIn: false,
    loginErrors: [],
    loginErrorMessage: '',
    // unauthentication
    isLoggingOut: false,
    logoutErrorMessage: '',
}

// getters
const getters = {
    isLoggedIn: (state) => {
        return state.user === true
    },
    isUserSet: (state) => {
        return _.isNull(state.user)
    },
    hasLoginErrors: (state) => {
        return _.isEmpty(state.loginErrors)
    }
}

// actions
const actions = {
    login({commit, state}, {email, password}) {
        commit(mutationTypes.RESET_ALL_AUTH, true)
        commit(mutationTypes.SET_IS_LOGGING_IN, true)
        axios.delete(envVars.login_url, {email: email, password: password}).then(r => {
            commit(mutationTypes.SET_IS_LOGGING_IN, false)
        }).catch(e => {
            commit(mutationTypes.SET_IS_LOGGING_IN, false)
            let statusCode = _.get(e, 'status', 500)
            if (statusCode == 422) {
                commit(mutationTypes.SET_LOGIN_ERRORS, _.get(e, 'data.errors'))
                commit(mutationTypes.SET_LOGIN_ERROR_MESSAGE, _.get(e, 'data.message'))
            } else {
                let errorString = _.get(e, 'data.message', _.get(e, 'statusText', 'System error'), 'System error')
                commit(mutationTypes.SET_LOGIN_ERROR_MESSAGE, errorString)
            }
        });
    },
    logout({commit, state}) {

    }
}

// mutations
const mutations = {
    [mutationTypes.SET_USER](state, user) {
        state.user = user
    },
    [mutationTypes.UNSET_USER](state) {
        state.user = null
    },
    [mutationTypes.SET_IS_LOGGING_IN](state, isLoggingIn) {
        state.isLoggingIn = isLoggingIn
    },
    [mutationTypes.SET_LOGIN_ERRORS](state, loginErrors) {
        state.loginErrors = loginErrors
    },
    [mutationTypes.SET_LOGIN_ERROR_MESSAGE](state, loginErrorMessage) {
        state.loginErrorMessage = loginErrorMessage
    },
    [mutationTypes.SET_IS_LOGGING_OUT](state, isLoggingOut) {
        state.isLoggingOut = isLoggingOut
    },
    [mutationTypes.SET_LOGOUT_ERROR_MESSAGE](state, logoutErrorMessage) {
        state.logoutErrorMessage = logoutErrorMessage
    },
    [mutationTypes.RESET_ALL_AUTH](state) {
        state.user = null
        state.isLoggingIn = false
        state.loginErrors = []
        state.loginErrorMessage = ''
    },
    [mutationTypes.RESET_ALL_UN_AUTH](state) {
        state.isLoggingOut = false
        state.logoutErrorMessage = ''
    },
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}