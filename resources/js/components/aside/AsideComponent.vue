<template>
  <aside class="col-md-3">
    <div class="card h-100 leftAside">
      <div class="card-header bg-primary text-white">{{ title }}</div>

      <slot></slot>
      
    </div>
  </aside>
</template>

<script>
export default {
  props: ['title']
};
</script>
<style lang="scss">
.formsContainer {
  border-left: none;
  border-right: none;
  .card-header {
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    &:after {
      content: "\f107";
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
    }
    &.collapsed:after {
      content: "\f105";
    }
  }
}
</style>