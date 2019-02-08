<template>
    <div>
        <headerComponent></headerComponent>
        <router-view></router-view>
    </div>
</template>

<script>
    import headerComponent from './partials/HeaderComponent'
    export default {
        components: {
            headerComponent
        },
        metaInfo: {
            title: 'Theme Builder v1.0.0'
        }
    }
</script>
