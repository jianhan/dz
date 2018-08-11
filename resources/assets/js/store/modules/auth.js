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
        commit('resetAllAuth', true)
        commit('setIsLoggingIn', true)
        axios.post(env.login_url, {email: email, password: password}).then(r => {
            commit('setIsLoggingIn', false)
        }).catch(e => {
            console.log(e)
            commit('setIsLoggingIn', false)
            let statusCode = _.get(e, 'response.status', 500)
            if (statusCode == 422) {
                commit('setLoginErrors', _.get(e, 'response.data.errors'))
                commit('setLoginErrorMessage', _.get(e, 'response.data.message'))
            } else {
                let errorString = _.get(e, 'response.data.message', _.get(e, 'response.statusText', 'System error'), 'System error')
                commit('setLoginErrorMessage', errorString)
            }
        });
    },
    logout({commit, state}) {

    }
}

// mutations
const mutations = {
    setUser(state, user) {
        state.user = user
    },
    unsetUser(state) {
        state.user = null
    },
    setIsLoggingIn(state, isLoggingIn) {
        state.isLoggingIn = isLoggingIn
    },
    setLoginErrors(state, loginErrors) {
        state.loginErrors = loginErrors
    },
    setLoginErrorMessage(state, loginErrorMessage) {
        state.loginErrorMessage = loginErrorMessage
    },
    setIsLoggingOut(state, isLoggingOut) {
        state.isLoggingOut = isLoggingOut
    },
    setLogoutErrorMessage(state, logoutErrorMessage) {
        state.logoutErrorMessage = logoutErrorMessage
    },
    resetAllAuth(state) {
        state.user = null
        state.isLoggingIn = false
        state.loginErrors = []
        state.loginErrorMessage = ''
    },
    resetAllUnAuth(state) {
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