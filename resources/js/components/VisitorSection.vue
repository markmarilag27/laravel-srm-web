<script setup lang="ts">
import { ref, onMounted } from 'vue'
import type { Link } from '../models/link.model'

const links = ref<Link[]>([
  {
    text: 'Media',
    href: '/',
    value: 'media'
  },
  {
    text: 'HTML Snippets',
    href: '?type=html_snippet',
    value: 'html_snippet'
  },
  {
    text: 'Links',
    href: '?type=link',
    value: 'link'
  }
])

const currentLink = ref<string>('media')

onMounted(() => {
  const location: Location = window.location
  if (location.search.includes('type=html_snippet')) {
    currentLink.value = 'html_snippet'
  } else if (location.search.includes('type=link')) {
    currentLink.value = 'link'
  } else {
    currentLink.value = 'media'
  }
})
</script>

<template>
  <nav class="flex bg-slate-800 rounded-t-sm">
    <a
      v-for="(link, index) in links"
      class="block py-3 px-6 font-semibold"
      :class="[currentLink === link.value ? 'text-white' : 'text-white opacity-75']"
      :key="index"
      :href="link.href"
      v-text="link.text"
    />
  </nav>
  <div v-for="(link, index) in links" :key="index">
    <slot v-if="currentLink === link.value" :name="link.value" />
  </div>
</template>
