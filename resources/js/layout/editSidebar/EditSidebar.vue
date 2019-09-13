<template>
  <aside class="sidebar mb-4 mb-lg-0">
    <div class="card h-100">
      <div
        class="card-header sidebar__header bg-primary d-flex align-items-center justify-content-between"
      >
        <strong class="text-white">{{ title }}</strong>
        <div>
          <a href="#" class="btn btn-primary btn-sm">
            <i class="fas fa-save"></i>
          </a>
          <a href="#" class="btn btn-primary btn-sm">
            <i class="fas fa-sync"></i>
          </a>
          <router-link :to="{name: 'home'}" class="btn btn-primary btn-sm">
            <i class="fas fa-reply-all"></i>
          </router-link>
        </div>
      </div>

      <div class="accordion" id="accordionAside">
        <div class="card" v-for="(variable, index) in getVariables" :key="index">

          <div class="card-header" :id="getAttrName(variable) + 'Header'">
            <a
              href="#"
              class="card-header__link"
              data-toggle="collapse"
              :data-target="'#' + getAttrName(variable) + 'Colors'"
              aria-expanded="true"
              :aria-controls="getAttrName(variable) + 'Colors'"
            >
              <span>Primary Colors</span>
            </a>
          </div>

          <div
            :id="getAttrName(variable) + 'Colors'"
            class="collapse show"
            :aria-labelledby="getAttrName(variable) + 'Header'"
            data-parent="#accordionAside"
          >
            <div class="card-body">
              <div class="form-row">

                  <div v-for="(dat, index2) in variable" :key="index2">

                    <div v-for="(data, index3) in dat" :key="index3">
                      
                      <label for="primary">{{ getName(data) }}</label>
                      <div class="input-group color">
                        <input
                          type="text"
                          class = "form-control"
                          :id="getName(data)"
                          :name="getName(data)"
                          :value="getValue(data)"
                        />
                        <div class="input-group-append input-color">
                          <span class="input-group-text input-group-addon">
                            <i></i>
                          </span>
                        </div>
                      </div>

                    </div>

                  </div>

              </div>
            </div>
          </div>

        </div> <!-- .card -->
      </div> <!-- #accordionAside -->

    </div>
  </aside>
</template>

<script>
export default {
  data() {
    return {
      title: 'Test'
    }
  },
  computed: {
    getVariables() {
      return this.$store.getters.GET_VARIABLES;
    }
  },
  mounted() {
    this.$store.dispatch('FETCH_VARIABLES', this.$route.params.id);
  },
  methods: {
    getName(data) {
      return Object.keys(data)[0];
    },
    getValue(data) {
      return data[Object.keys(data)[0]];
    },
    getAttrName(data) {
      let str = Object.keys(data)[0];
      return str.replace(/\s+/g, '');
    }

  }
};
</script>