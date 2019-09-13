<template>
  <div class="wrapper">
    <EditSidebar></EditSidebar>
    <Main></Main>
  </div>
</template>

<script>
import EditSidebar from "../layout/editSidebar/EditSidebar";
import Main from "../layout/main/Main";

export default {
  components: {
    EditSidebar,
    Main
  },
  mounted() {
  }
}
</script>