<template>
  <!-- eslint-disable vue/no-v-html -->

  <div class="auth-wrapper d-flex align-center justify-center pa-4">
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
          Créer un compte
        </VCardTitle>
      </VCardItem>

      <VCardText class="pt-2 text-center">
        <p class="mb-0">
          Créez votre compte et rejoignez l'aventure dès maintenant!
        </p>
      </VCardText>

      <VCardText>
        <VForm @submit.prevent="() => {}">
          <VRow>
            <!-- Username -->
            <VCol cols="12">
              <VTextField
                v-model="form.username"
                label="Nom & Prénoms"
                placeholder="Johndoe"
              />
            </VCol>
            <!-- email -->
            <VCol cols="12">
              <VTextField
                v-model="form.email"
                label="Adresse mail"
                placeholder="johndoe@email.com"
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

              <div class='my-2 text-center'>
                <small>
                  En continuant, vous acceptez les
                  <a href='#'>conditions d'utilisation et de vente</a>.
                  Consultez notre <a href='#'> déclaration de confidentialité</a>,
                  notre <a href='#'>politique relative aux cookies</a>.
                </small>
              </div>

              <VBtn
                block
                type="submit"
                to="/"
              >
                Créer un compte
              </VBtn>
            </VCol>

            <!-- login instead -->
            <VCol
              cols="12"
              class="text-center text-caption"
            >
              <span>Vous possédez déjà un compte ? </span>
              <RouterLink
                class="text-primary ms-2"
                to="login"
              >
                Identifiez-vous
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
  username: '',
  email: '',
  password: '',
  privacyPolicies: false,
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
