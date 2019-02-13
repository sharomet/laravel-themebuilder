export default {
    SET_THEMES(state, themes){
        state.themes = themes
    },
    SET_VARIABLES(state, variables){
        state.variables = variables
    },
    SET_VAR(state, {variable, value}) {
        state.variables[variable] = value
    },

    SET_TOKEN(state, token) {
        state.token = token
    },
    SET_USER(state, user) {
        state.user = user
    },
    CLEAR_LOCAL_STORE() {
        localStorage.removeItem('token');
        localStorage.removeItem('token_expiration');
    },
    SET_DRAWER(state) {
        state.drawer = !state.drawer;
    }
}