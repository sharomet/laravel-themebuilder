<template>
    <div class="container-fluid h-100">
        <div class="row h-100">
            
            <ThemeListComponent></ThemeListComponent>
            
        </div>
    </div>
</template>

<script>
    import ThemeListComponent from '../themes/ThemeListComponent'

    export default {
        components: {
            ThemeListComponent
        }
    }
</script>