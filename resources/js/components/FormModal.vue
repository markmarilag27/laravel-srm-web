<script setup lang="ts">
import { ref } from 'vue'
import BaseButton from './Base/BaseButton.vue'
import BaseModal from './Base/BaseModal.vue'

interface Props {
  buttonName: string
  buttonClass: string
  modalTitle: string
  modalButtonCloseName: string
  modalButtonOkName: string
  modalWidth: string
  formId: string
}

const props = defineProps<Props>()

const isActive = ref<boolean>(false)
const isSaving = ref<boolean>(false)

const handleIsActive = (): void => {
  isActive.value = !isActive.value
}

const handleSubmit = (): void => {
  isSaving.value = !isSaving.value
}
</script>

<template>
  <BaseButton
    @click="handleIsActive"
    :loading="false"
    :class="props.buttonClass"
  >
    {{ props.buttonName }}
  </BaseButton>
  <BaseModal
    v-if="isActive"
    :isShow="isActive"
    :isSaving="isSaving"
    :title="props.modalTitle"
    :modalButtonCloseName="props.modalButtonCloseName"
    :modalButtonOkName="props.modalButtonOkName"
    :modalWidth="props.modalWidth"
    :handleIsActive="handleIsActive"
    :handleSubmit="handleSubmit"
    :formId="formId"
  >
    <slot />
  </BaseModal>
</template>
