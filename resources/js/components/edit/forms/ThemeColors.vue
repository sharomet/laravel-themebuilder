<template>
<div>
    <div class="card formsContainer">
        <div class="card-header" data-toggle="collapse" data-target="#collapseThemeColors">
            Theme Colors
        </div>
        <div id="collapseThemeColors" class="collapse show" data-parent="#formsAccardion">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="base-color-primary" :value="GET_VARIABLES['base-color-primary']">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="base-color-primary" :value="GET_VARIABLES['base-color-primary']">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
    import { mapGetters } from 'vuex';
    export default {
        computed: {
            ...mapGetters(['GET_VARIABLES']),
        },
    }
</script>