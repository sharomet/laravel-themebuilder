<template>
    <FormContainerTemplate :title="'Theme Colors'" :id="'themeColors'" :isShow="true">

        <div class="col-12" v-for="(variable, index) of variables" :key="index">
            <chrome-picker v-if="variable.color" v-model="variable.color"></chrome-picker>
            <div class="form-group">
                <label :for="variable.name">{{ variable.label }}</label>
                {{ variable.color.hex }}
                <input type="text"
                       :id="variable.name"
                       class="form-control"
                       :name="variable.name"
                       :value="variable.color.hex ? variable.color.hex : variable.color.rgba"
                       @input="setVar">
            </div>
            {{ GET_VARIABLES[variable.name] }}
        </div>

    </FormContainerTemplate>

</template>

<script>
    import { Chrome } from 'vue-color';
    import { mapGetters, mapActions } from 'vuex';
    import FormContainerTemplate from './FormContainerTemplate'
    export default {
        components: {
            FormContainerTemplate,
            'chrome-picker': Chrome
        },
        data: () => {
            return {
                variables: [
                    {
                        'label': 'Primary Color',
                        'name': 'base-color-primary',
                        'color': '#000'
                    },
                    {
                        'label': 'Secondary Color',
                        'name': 'base-color-second',
                        'color': '#000'
                    }
                ]
            }
        },
        computed: {
            ...mapGetters(['GET_VARIABLES']),
        },
        mounted () {

        },
        methods: {
            ...mapActions(['SET_VAR']),
            setVar(e) {
                this.SET_VAR([e.target.name, e.target.value]);
            },
            addItems(){
                return [
                    {
                        'label': 'Primary Color',
                        'name': 'base-color-primary',
                        'color': this.GET_VARIABLES['base-color-primary']
                    },
                    {
                        'label': 'Secondary Color',
                        'name': 'base-color-second',
                        'color': this.GET_VARIABLES['base-color-second']
                    }
                ]
            }
        }
    }
</script>