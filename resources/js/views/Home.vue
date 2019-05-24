<template>
  <div class="wrapper">
    <Aside :title="'Themes'">
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center" v-for="(theme, index) in getThemes" :key="index">
          <a href="#">
            {{ theme.name }}
          </a>
          <router-link :to="{name: 'edit', params: { id: theme.id }}" class="btn btn-sm">
            <i class="fas fa-edit"></i>
          </router-link>
        </li>
      </ul>
    </Aside>
    <Main></Main>
  </div>
</template>

<script>
import Aside from "../components/aside/Aside";
import Main from "../layout/main/Main";

export default {
  components: {
    Aside,
    Main
  },
  computed: {
    getThemes() {
      return this.$store.getters.GET_THEMES;
    }
  },
  mounted() {
    this.$store.dispatch("LOAD_THEMES");
  }
};
</script>
