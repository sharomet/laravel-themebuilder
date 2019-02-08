export default {
    SET_THEMES({commit}, themes){
      commit('SET_THEMES', themes);
    },

    SET_USER({ commit }, user) {
        commit('SET_USER', user)
    },

    SET_DRAWER({ commit }) {
        commit('SET_DRAWER');
    }
}
