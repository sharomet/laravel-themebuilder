export default {
    SET_THEMES({commit}, themes){
      commit('SET_THEMES', themes);
    },
    SET_VARIABLES({commit}, variables){
        commit('SET_VARIABLES', variables);
    },

    SET_USER({ commit }, user) {
        commit('SET_USER', user)
    },
    SET_DRAWER({ commit }) {
        commit('SET_DRAWER');
    }
}
