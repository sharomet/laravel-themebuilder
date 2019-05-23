<template>
    <div class="wrapper">
        <LeftAside></LeftAside>
        <Main></Main>
    </div>
</template>

<script>
import LeftAside from './layout/leftAside/LeftAside'
import Main from './layout/main/Main'

export default {
    components: {
        LeftAside,
        Main
    }
}
</script>
