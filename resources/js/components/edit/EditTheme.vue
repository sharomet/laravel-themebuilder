<template>
    <div class="container-fluid h-100">
        <div class="row h-100">

            <AsideComponent :title="title">

                <form>
                    <div class="accordion" id="formsAccardion">

                        <ThemeColors></ThemeColors>

                    </div>
                </form>

            </AsideComponent>

        </div>
    </div>
</template>

<script>
    import { mapActions } from 'vuex';
    import AsideComponent from '../aside/AsideComponent';
    import ThemeColors from './forms/ThemeColors';
    export default {
        components: {
            AsideComponent,
            ThemeColors
        },
        data: () => {
            return {
                title: 'Theme',
                id: '',
            }
        },
        mounted(){
            this.id = this.$route.params.id;
            this.getTheme();
            this.getVariables();
        },
        methods: {
            ...mapActions(['SET_VARIABLES']),
            getTheme(){
                axios.get('/api/themes')
                     .then(res => {
                        res.data.filter(theme => theme.id === this.id)
                                .forEach(theme => this.title = theme.name);
                     })
                     .catch(err => console.log(err));
            },
            getVariables() {
                axios.get('/api/edit/' + this.id)
                    .then(variables => this.SET_VARIABLES(variables.data))
                    .catch(err => console.log(err));
            }
        }
    }
</script>