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
          Nouveau mot de passe
        </VCardTitle>
      </VCardItem>

      <VCardText style='min-width: 450px'>
        <VForm @submit.prevent="submitForm">
          <VRow>
            <!-- email -->
            <VCol cols="12">
              <VTextField
                v-model="form.password"
                label="Mot de passe"
                placeholder="············"
                :type="isPasswordVisible ? 'text' : 'password'"
                :append-inner-icon="isPasswordVisible ? 'ri-eye-off-line' : 'ri-eye-line'"
                @click:append-inner="isPasswordVisible = !isPasswordVisible"
              />
            </VCol>

            <!-- password -->
            <VCol cols="12">
              <VTextField
                v-model="form.confirm_password"
                label="Confirmation de mot de passe"
                placeholder="············"
                :type="isPasswordVisible ? 'text' : 'password'"
                :append-inner-icon="isPasswordVisible ? 'ri-eye-off-line' : 'ri-eye-line'"
                @click:append-inner="isPasswordVisible = !isPasswordVisible"
              />


              <!-- login button -->
              <VBtn
                class='mt-5'
                block
                type="submit"
              >
                Envoyer
              </VBtn>
            </VCol>

            <!-- create account -->
            <VCol
              cols="12"
              class="text-center text-base"
            >
              <RouterLink
                v-if='false'
                class="text-primary ms-2"
                to="/auth/register"
              >
                Créer un compte
              </RouterLink>
            </VCol>

          </VRow>
        </VForm>
      </VCardText>
    </VCard>

    <img
      class="auth-footer-start-tree d-none d-md-block"
      :src="authV1Tree"
      :width="250"
      alt='bottom_decoration_left'
    />

    <img
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
import AuthProvider from '@/views/auth/AuthProvider.vue'
import logo from '@images/logo.svg?raw'
import authV1MaskDark from '@images/pages/auth-v1-mask-dark.png'
import authV1MaskLight from '@images/pages/auth-v1-mask-light.png'
import authV1Tree2 from '@images/pages/auth-v1-tree-2.png'
import authV1Tree from '@images/pages/auth-v1-tree.png'

const router = useRouter()

const form = ref({
  password: '',
  confirm_password: '',
})

const vuetifyTheme = useTheme()

const authThemeMask = computed(() => {
  return vuetifyTheme.global.name.value === 'light' ? authV1MaskLight : authV1MaskDark
})

const isPasswordVisible = ref(false)

const submitForm = () => {
  router.push({name: 'login'})
}
</script>

<style lang="scss">
@use "@core-scss/pages/page-auth.scss";
</style>
