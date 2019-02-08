<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
        <router-link :to="{ name: 'home' }" class="navbar-brand">Navbar</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</template>
<script>
    export default {}
</script>
