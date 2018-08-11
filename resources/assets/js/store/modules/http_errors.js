import * as mutationTypes from './mutation_types'

// initial state
const state = {
    response: null,
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
    mutations
}
