import { createApp } from 'vue/dist/vue.esm-bundler'
import BaseButton from './components/Base/BaseButton.vue'
import BaseModal from './components/Base/BaseModal.vue'
import BaseAccordion from './components/Base/BaseAccordion.vue'
import FormModal from './components/FormModal.vue'
import VisitorSection from './components/VisitorSection.vue'

const appElement = document.getElementById('app')

if (appElement) {
  createApp({
    name: 'MainApp',
    components: {
      BaseButton,
      BaseModal,
      BaseAccordion,
      FormModal,
      VisitorSection
    }
  }).mount(appElement)
}
