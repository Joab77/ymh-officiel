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

        <VCardTitle class="font-weight-semibold text-h3">
          S'identifier
        </VCardTitle>
      </VCardItem>

      <VCardText class="pt-2">
        <p class="mb-0 text-center">
          Connectez-vous à votre compte et commencez l'aventure.
        </p>
      </VCardText>

      <VCardText>
        <VForm @submit.prevent="() => {}">
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
              <VTextField
                v-model="form.password"
                label="Mot de passe"
                placeholder="············"
                :type="isPasswordVisible ? 'text' : 'password'"
                :append-inner-icon="isPasswordVisible ? 'ri-eye-off-line' : 'ri-eye-line'"
                @click:append-inner="isPasswordVisible = !isPasswordVisible"
              />

              <!-- remember me checkbox -->
              <div  class="d-flex align-center justify-space-between flex-wrap mt-1 mb-4">
                <VCheckbox
                  v-if='false'
                  v-model="form.remember"
                  label="Remember me"
                />

                <RouterLink
                  :to="{ name: 'forgot-password' }"
                  class="ms-auto mb-1"
                >
                  Mot de passe oublié?
                </RouterLink>
              </div>

              <!-- login button -->
              <VBtn
                block
                type="submit"
                to="/"
              >
                S'identifier
              </VBtn>
            </VCol>

            <!-- create account -->
            <VCol
              cols="12"
              class="text-center text-base"
            >
              <span>Nouveau sur notre plateforme ?</span>
              <RouterLink
                class="text-primary ms-2"
                :to="{ name: 'register' }"
              >
                Créer votre compte
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

const form = ref({
  email: '',
  password: '',
  remember: false,
})

const vuetifyTheme = useTheme()

const authThemeMask = computed(() => {
  return vuetifyTheme.global.name.value === 'light' ? authV1MaskLight : authV1MaskDark
})

const isPasswordVisible = ref(false)
</script>

<style lang="scss">
@use "@core-scss/pages/page-auth.scss";
</style>
