<template>
  <!-- eslint-disable vue/no-v-html -->

  <div class="auth-wrapper d-flex flex-row align-center justify-center pa-4">
<!--  <div class="auth-wrapper v-row v-row&#45;&#45;no-gutters">-->
    <VCard
      class="auth-card pa-4 pt-7"
      max-width="448"
    >
      <VCardItem class="justify-center">
        <template v-if='false' #prepend>
          <div class="d-flex">
            <div v-html="logo" />
          </div>
        </template>

        <VCardTitle class="font-weight-semibold text-2xl text-uppercase">
          Mot de passe oublié ?
        </VCardTitle>
      </VCardItem>

      <VCardText class="pt-2 text-center">
        <h5></h5>
        <p class="mb-0 text-center">
          Entrez votre email pour réinitialiser votre mot de passe
        </p>
      </VCardText>

      <VCardText>
        <VForm @submit.prevent="submitForm">
          <VRow>
            <!-- email -->
            <VCol cols="12">
              <VTextField
                v-model="form.email"
                label="Adresse mail"
                type="email"
              />
            </VCol>

            <!-- password -->
            <VCol cols="12">
              <!-- login button -->
              <VBtn
                block
                type="submit"
              >
                Continuer
              </VBtn>
            </VCol>

            <!-- create account -->
            <VCol
              cols="12"
              class="text-center text-base"
            >
              <RouterLink
                class="text-primary ms-2"
                :to="{name: 'login'}"
              >
                 Annuler
              </RouterLink>
            </VCol>

          </VRow>
        </VForm>
      </VCardText>
    </VCard>

    <img
      v-if='false'
      class="auth-footer-start-tree d-none d-md-block"
      :src="authV1Tree"
      :width="250"
      alt='bottom_decoration_left'
    />

    <img
      v-if='false'
      :src="authV1Tree2"
      class="auth-footer-end-tree d-none d-md-block"
      :width="350"
      alt='bottom_decoration_right'
    />

    <!-- bg img -->
    <img
      class="auth-footer-mask d-none d-md-block"
      :src="authThemeMask"
      alt='bottom_decoration_mask'
    />
  </div>
</template>

<script setup>
import { useTheme } from 'vuetify'
import logo from '@images/logo.svg?raw'
import authV1MaskDark from '@images/pages/auth-v1-mask-dark.png'
import authV1MaskLight from '@images/pages/auth-v1-mask-light.png'
import authV1Tree2 from '@images/pages/auth-v1-tree-2.png'
import authV1Tree from '@images/pages/auth-v1-tree.png'
import Swal from 'sweetalert2/dist/sweetalert2.js'
import { config } from '@/plugins/Swal/index.js'

const form = ref({
  email: '',
})

const vuetifyTheme = useTheme()

const authThemeMask = computed(() => {
  return vuetifyTheme.global.name.value === 'light' ? authV1MaskLight : authV1MaskDark
})


const submitForm = () => {
  //TODO:: Send Email and show modal
  Swal.fire({
    ...config,
    toast: false,
    showConfirmButton: true,
    timer: false,
    icon: 'success',
    position: 'center',
    text: 'Un email vous a été envoyé. Veuillez consulter votre boîte de réception pour réinitialiser votre mot de passe.'
  });
}
</script>

<style lang="scss">
@use "@core-scss/pages/page-auth.scss";
</style>
