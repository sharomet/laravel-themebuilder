<template>
    <div>
        <div class="card formsContainer">
            <div class="card-header" :class="{ collapsed: !isShow }" data-toggle="collapse" :data-target="'#'+id">
                {{ title }}
            </div>
            <div :id="id" class="collapse" :class="{ show: isShow }">
                <div class="card-body">
                    <div class="form-row">

                        <slot></slot>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title', 'id', 'isShow']
    }
</script>