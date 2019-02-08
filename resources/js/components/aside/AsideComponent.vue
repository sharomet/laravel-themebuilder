<template>
  <div class="col-md-3">
    <div class="card h-100">
      <div class="card-header bg-primary text-white">{{ title }}</div>

      <slot></slot>
      
    </div>
  </div>
</template>

<script>
export default {
  props: ["title"]
};
</script>