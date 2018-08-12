import * as mutationTypes from './mutation_types'

// initial state
const state = {
    response: null,
}

// getters
const getters = {
    hasResponse: (state) => {
        return state.response !== null
    },
    message: (state) => {
        if (state.response !== null) {
            return 'Request can not be processed: ' + _.get(state, 'response.statusText', _.get(state, 'response.data.message', 'System error'), 'System error')
        }

        return ''
    }
}

// mutations
const mutations = {
    [mutationTypes.SET_RESPONSE](state, response) {
        state.response = response
    },
    [mutationTypes.UN_SET_RESPONSE](state) {
        state.response = null
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations
}
