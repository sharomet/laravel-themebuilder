<template>
  <aside class="sidebar mb-4 mb-lg-0">
    <div class="card h-100">
      <div class="card-header sidebar__header bg-primary d-flex align-items-center justify-content-between">
        <strong class="text-white">{{ title }}</strong>
        <div v-if="tools">
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
        <div v-else>
          <a href="#" class="btn btn-primary btn-sm">
            <i class="fas fa-plus-circle"></i>
          </a>
        </div>
      </div>

      <slot></slot>

    </div>
  </aside>
</template>

<script>
export default {
    props: {
        title: String,
        tools: Boolean,
    }
}
</script>
