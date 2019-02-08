<template>
    <div class="container-fluid h-100">
        <div class="row h-100">
            
            <AsideComponent :title="title">

            </AsideComponent>

        </div>
    </div>
</template>

<script>
    import AsideComponent from '../aside/AsideComponent'
    export default {
        components: {
            AsideComponent
        },
        data: () => {
            return {
                title: 'Theme',
            }
        },
        mounted(){
            this.getTheme();
        },
        methods: {
            getTheme(){
                axios.get('/api/themes')
                    .then(res => {
                        res.data.filter(theme => theme.id === this.$route.params.id)
                                .forEach(theme => this.title = theme.name);
                    })
                    .catch(err => console.log(err));
            }
        }
    }
</script>