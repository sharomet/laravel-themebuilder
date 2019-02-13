<template>
    <FormContainerTemplate :title="'General Content'" :id="'generalContent'" :isShow="false">
        <div class="col-12">
            <div class="form-group">
            <input type="text"
                   class="form-control"
                   name="base-color-primary"
                   :value="GET_VARIABLES['body-background']"
                   @input="setVar">
            {{ GET_VARIABLES['body-background'] }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <input type="text"
                   class="form-control"
                   name="base-color-second"
                   :value="GET_VARIABLES['body-background']"
                   @input="setVar">
            {{ GET_VARIABLES['body-background'] }}
            </div>
        </div>
    </FormContainerTemplate>
</template>
<script>
    import { mapGetters, mapActions } from 'vuex';
    import FormContainerTemplate from './FormContainerTemplate'

    export default {
        components: {
            FormContainerTemplate
        },
        data: () => {
            return {
                variables: [
                    {}
                ]
            }
        },
        computed: {
            ...mapGetters(['GET_VARIABLES']),
        },
        methods: {
            ...mapActions(['SET_VAR']),
            setVar(e) {
                this.SET_VAR([e.target.name, e.target.value]);
            }
        }
    }
</script>