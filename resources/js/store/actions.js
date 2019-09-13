import axios from 'axios'

export default {
    LOAD_THEMES({commit, state}) {
        axios.get(state.apiUrl)
             .then(res => commit('LOAD_THEMES', res))
             .catch(err => console.log(err));
    },

    FETCH_VARIABLES({commit, state}, id) {
        axios.get(state.apiUrl + 'edit/' + id)
             .then(res => commit('SET_VARIABLES', res))
             .catch(err => console.log(err));
    },

    SET_USER({commit}, user) {
        commit('SET_USER', user)
    }
    /*SET_USERS({ commit, state }) {
        axios.get(state.apiUrl + 'users')
             .then(res => commit('SET_USERS', res.data))
             .catch(err => console.log(err))
    },
    ADD_USER({ commit, state }, user) {
        axios.post(state.apiUrl + 'user', user)
             .then(res => commit('ADD_USER', res.data))
             .catch(err => console.log(err))
    }*/

}