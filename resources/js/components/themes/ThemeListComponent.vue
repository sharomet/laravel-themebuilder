<template>
    <AsideComponent :title="title">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center" v-for="(theme, index) of GET_THEMES" :key="index">
                <a href="#">{{ theme.name }}</a>
                <div>
                    <router-link  class="btn btn-primary btn-sm" :to="{ name: 'edit', params: { id: theme.id } }">
                        <i class="fas fa-pen"></i>
                    </router-link>
                    <a href="#" class="btn btn-danger btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </div>
            </li>
        </ul>
    </AsideComponent>
</template>
<script>
    import AsideComponent from '../aside/AsideComponent'
    import { mapActions ,mapState, mapGetters } from 'vuex'

    export default {
        components: {
            AsideComponent
        },
        data: () => {
            return {
                title: 'Themes',
            }
        },
        computed: {
            ...mapGetters(['GET_THEMES']),
            ...mapState(['themes'])
        },
        mounted() {
            this.getAllThemes();
        },
        methods: {
            ...mapActions(['SET_THEMES']),
            getAllThemes() {
                axios.get('/api/themes')
                     .then(res => this.SET_THEMES(res.data))
                     .catch(err => console.log(err));
            }
        }
    }
</script>