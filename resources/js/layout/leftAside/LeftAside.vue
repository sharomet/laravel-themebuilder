<template>
  <Aside :title="'Primary Theme'" :tools="true">
    <div class="accordion" id="accordionAside">
      <div class="card">
        <div class="card-header" id="primaryHeader">
          <a
            href="#"
            class="card-header__link"
            data-toggle="collapse"
            data-target="#primaryColors"
            aria-expanded="true"
            aria-controls="primaryColors">
            <span>Primary Colors</span>
          </a>
        </div>

        <div
          id="primaryColors"
          class="collapse show"
          aria-labelledby="primaryHeader"
          data-parent="#accordionAside">
          <div class="card-body">
            <div class="form-row">

              <div v-for="(variable, index) in getVariables" :key="index">
                {{ index }}
                <div v-for="(dat, index2) in variable" :key="index2">
                  {{ index2 }}
                  <div v-for="(data, index3) in dat" :key="index3">
                    <label for="primary">{{ data }}</label>
                    <div class="input-group color">
                      <input
                        type="text"
                        id="primary"
                        name="primary"
                        class="form-control"
                        value="#38A8D1">
                      <div class="input-group-append input-color">
                        <span class="input-group-text input-group-addon">
                          <i></i>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!--<div class="col-sm-6 form-group">
                <label for="secondary">Secondary</label>
                <div class="input-group color">
                  <input
                    type="text"
                    id="secondary"
                    name="secondary"
                    class="form-control"
                    value="#9A488D">
                  <div class="input-group-append input-color">
                    <span class="input-group-text input-group-addon">
                      <i></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="success">Success</label>
                <div class="input-group color">
                  <input
                    type="text"
                    id="success"
                    name="success"
                    class="form-control"
                    value="#3EAF88">
                  <div class="input-group-append input-color">
                    <span class="input-group-text input-group-addon">
                      <i></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="info">Info</label>
                <div class="input-group color">
                  <input type="text" id="info" name="info" class="form-control" value="#55B6DE">
                  <div class="input-group-append input-color">
                    <span class="input-group-text input-group-addon">
                      <i></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="warning">Warning</label>
                <div class="input-group color">
                  <input
                    type="text"
                    id="warning"
                    name="warning"
                    class="form-control"
                    value="#EF8936">
                  <div class="input-group-append input-color">
                    <span class="input-group-text input-group-addon">
                      <i></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="danger">Danger</label>
                <div class="input-group color">
                  <input type="text" id="danger" name="danger" class="form-control" value="#EE2F1B">
                  <div class="input-group-append input-color">
                    <span class="input-group-text input-group-addon">
                      <i></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="light">Light</label>
                <div class="input-group color">
                  <input type="text" id="light" name="light" class="form-control" value="#E9EDEF">
                  <div class="input-group-append input-color">
                    <span class="input-group-text input-group-addon">
                      <i></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 form-group">
                <label for="dark">Dark</label>
                <div class="input-group color">
                  <input type="text" id="dark" name="dark" class="form-control" value="#4A4C4D">
                  <div class="input-group-append input-color">
                    <span class="input-group-text input-group-addon">
                      <i></i>
                    </span>
                  </div>
                </div>
              </div>-->

            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <a
            href="#"
            class="card-header__link collapsed"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo"
          >
            <span>Secondary Colors</span>
          </a>
        </div>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionAside"
        >
          <div
            class="card-body"
          >Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <a
            href="#"
            class="card-header__link collapsed"
            data-toggle="collapse"
            data-target="#collapseThree"
            aria-expanded="false"
            aria-controls="collapseThree">
            <span>Navbar</span>
          </a>
        </div>
        <div
          id="collapseThree"
          class="collapse"
          aria-labelledby="headingThree"
          data-parent="#accordionAside">
          <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</div>
        </div>
      </div>
    </div>
  </Aside>
</template>

<script>
import Aside from "../../components/aside/Aside";

export default {
  components: {
    Aside
  },
  computed: {
    getVariables() {
      return this.$store.getters.GET_VARIABLES;
    }
  },
  mounted() {
    this.$store.dispatch('FETCH_VARIABLES', this.$route.params.id);
  }
};
</script>
