<template>
    <FormContainerTemplate :title="'Theme Colors'" :id="'themeColors'" :isShow="true">

        <div class="col-12" v-for="(variable, index) of variables" :key="index">
            <div class="form-group">
                <label :for="variable.name">{{ variable.label }}</label>
                <input type="text"
                       :id="variable.name"
                       class="form-control"
                       :name="variable.name"
                       :value="GET_VARIABLES[variable.name]"
                       @input="setVar">
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
                    {
                        'label': 'Primary Color',
                        'name': 'base-color-primary'
                    },
                    {
                        'label': 'Secondary Color',
                        'name': 'base-color-second'
                    }
                ]
            }
        },
        computed: {
            ...mapGetters(['GET_VARIABLES']),
            /*baseColorPrimary: {
                get() {
                    return this.GET_VARIABLES['base-color-primary'];
                },
                set(value) {
                    this.SET_VAR(['base-color-primary', value]);
                }
            },*/
        },
        methods: {
            ...mapActions(['SET_VAR']),
            setVar(e) {
                this.SET_VAR([e.target.name, e.target.value]);
            }
        }
    }
</script>