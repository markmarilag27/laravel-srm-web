<script setup lang="ts">
import { ref } from 'vue'

interface Props {
  title: string
}

const props = defineProps<Props>()
const isVisible = ref<boolean>(false)

const handleIsVisible = (): void => {
  isVisible.value = !isVisible.value
}
</script>

<template>
  <h2>
    <button
      @click="handleIsVisible"
      type="button"
      class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200"
      :class="[isVisible ? 'bg-black' : 'bg-white']"
    >
      <span :class="{ 'text-white': isVisible }" v-text="props.title" />
      <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </h2>
  <div :class="[isVisible ? 'block' : 'hidden']">
    <div class="p-5 font-light bg-white border border-b-0 border-gray-200">
      <slot />
    </div>
  </div>
</template>
