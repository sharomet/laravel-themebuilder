export default {
    LOAD_THEMES(state, themes) {
        state.themes = themes.data;
    },

    SET_VARIABLES(state, variables) {
        console.log(variables.data);
        state.variables = variables.data;
    },

    SET_TOKEN(state, token) {
        state.token = token
    },
    SET_USERS(state, users) {
        state.users = users
    },
    ADD_USER(state, user) {
        state.users.push(user)
    },
    REMOVE_USER(state, id) {
        state.users = state.users.filter((user) => { 
            return user._id !== id;  
        });
    },

    CLEAR_LOCAL_STORE() {
        localStorage.removeItem('token');
        localStorage.removeItem('token_expiration');
    }
}