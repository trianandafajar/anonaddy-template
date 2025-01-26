<template>
  <div class="relative">
    <div v-if="open" @click="open = false" class="fixed inset-0"></div>
    <button @click="open = !open" class="relative flex items-center focus:outline-none">
      <span class="ml-2 md:ml-0 font-medium text-gray-100 flex">
        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Image" width="50" class="rounded-full">
       <span class="mt-3 ml-3">{{ username }}</span> </span>
      <svg
        class="ml-1 h-5 w-5 fill-current "
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
      >
        <path
          d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"
        />
      </svg>
    </button>
    <transition
      enter-active-class="transition-all transition-fastest ease-out-quad"
      leave-active-class="transition-all transition-faster ease-in-quad"
      enter-class="opacity-0 scale-70"
      enter-to-class="opacity-100 scale-100"
      leave-class="opacity-100 scale-100"
      leave-to-class="opacity-0 scale-70"
    >
      <div
        v-if="open"
        class="origin-top-right absolute right-0 mt-2 w-64 bg-white rounded-lg shadow py-2 z-10"
      >
        <slot></slot>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  props: ['username'],
  data() {
    return {
      open: false,
    }
  },
}
</script>
