<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />
        <h6 class='text-center'> Créer un compte</h6>
        <p class='text-center'> Créez votre compte et rejoignez l'aventure dès maintenant!</p>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Nom & Prénoms" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Mot de passe" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirmer le mot de passe" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>
            <div class='my-2 text-center'>
                <small>
                    En continuant, vous acceptez les
                    <a href='#'>conditions d'utilisation et de vente</a>.
                    Consultez notre <a href='#'> déclaration de confidentialité</a>,
                    notre <a href='#'>politique relative aux cookies</a>.
                </small>
            </div>

            <div class="flex flex-col items-center justify-end mt-4">

                <PrimaryButton class="mb-2 w-100 flex justify-center items-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Créer votre compte
                </PrimaryButton>
                <div class='text-sm text-gray-600 hover:text-gray-900'>
                    Vous possédez déjà un compte ?
                    <Link
                        :href="route('login')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Identifiez-vous
                    </Link>
                </div>

            </div>
        </form>
    </GuestLayout>
</template>
