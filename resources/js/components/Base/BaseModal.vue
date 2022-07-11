<script setup lang="ts">
import { ref, watch, onBeforeUnmount } from 'vue'
import BaseButton from './BaseButton.vue'

interface Props {
  isShow: boolean
  isSaving: boolean
  title: string
  modalButtonCloseName: string
  modalButtonOkName: string
  modalWidth: string
  handleIsActive: () => void
  handleSubmit: () => void
  formId: string
}

const props = defineProps<Props>()

</script>

<template>
  <Teleport to="body">
    <div tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 flex justify-center items-center right-0 bottom-0" :class="[props.isShow ? '' : 'hidden']">
      <div class="bg-black absolute top-0 left-0 right-0 bottom-0 opacity-20" />
      <div class="relative p-4 max-w-2xl h-full md:h-auto" :class="modalWidth">
        <!-- modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- modal header -->
          <div class="flex justify-between items-start p-4">
            <h3 class="text-xl text-gray-900" v-text="props.title" />
            <button @click="handleIsActive" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </div>
          <!-- modal body -->
          <div class="py-1.5 px-4 space-y-6">
              <slot />
          </div>
          <!-- modal footer -->
          <div class="flex items-center justify-end py-4 px-6 space-x-2">
              <BaseButton
                @click="handleIsActive"
                :loading="false"
                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-4 py-1.5 hover:text-gray-900 focus:z-10"
              >
                {{ modalButtonCloseName }}
              </BaseButton>
              <BaseButton
                @click="handleSubmit"
                type="submit"
                :loading="props.isSaving"
                :form="props.formId"
                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-4 py-1.5 hover:text-gray-900 focus:z-10"
              >
                {{ modalButtonOkName }}
              </BaseButton>
          </div>
        </div>
      </div>
    </div>
  </Teleport>
</template>
