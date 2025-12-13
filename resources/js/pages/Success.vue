<template>
    <div
        class="min-h-screen bg-gradient-to-br from-slate-800 via-slate-700 to-emerald-800 flex items-center justify-center px-6 py-12"
    >
        <div class="max-w-2xl w-full">
            <!-- Loading State -->
            <div v-if="loading" class="text-center">
                <div
                    class="inline-block animate-spin rounded-full h-16 w-16 border-t-2 border-b-2 border-emerald-400"
                ></div>
                <p class="mt-4 text-white text-lg">{{ t.successPage.loading }}</p>
            </div>

            <!-- Success Content -->
            <div
                v-else-if="registration"
                class="bg-white rounded-xl shadow-2xl overflow-hidden"
            >
                <!-- Header -->
                <div
                    class="bg-gradient-to-r from-emerald-500 to-emerald-600 p-8 text-center"
                >
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-full mb-4"
                    >
                        <svg
                            class="w-12 h-12 text-emerald-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7"
                            ></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-white mb-2">
                        {{ t.successPage.title }}
                    </h1>
                    <p class="text-emerald-100 text-lg">
                        {{ t.successPage.subtitle }}
                    </p>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <!-- Welcome Message -->
                    <div class="mb-8 text-center">
                        <p class="text-xl text-zinc-900 font-semibold mb-3">
                            {{ t.successPage.greeting }} {{ registration.first_name }}
                            {{ registration.last_name }}
                        </p>
                        <p class="text-zinc-600">
                            {{ t.successPage.message.replace('{email}', registration.email) }}
                        </p>
                    </div>

                    <!-- Important Warning -->
                    <div class="bg-amber-50 border-l-4 border-amber-500 rounded-lg p-6 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-amber-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-amber-900 mb-2">{{ t.successPage.important }}</h4>
                                <p class="text-amber-800 text-sm">{{ t.successPage.importantMessage }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Event Details -->
                    <div
                        class="bg-emerald-50 border-l-4 border-emerald-500 rounded-lg p-6 mb-6"
                    >
                        <h3
                            class="font-bold text-zinc-900 mb-4 flex items-center gap-2"
                        >
                            <svg
                                class="w-5 h-5 text-emerald-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                ></path>
                            </svg>
                            {{ t.successPage.eventDetails }}
                        </h3>
                        <div class="space-y-2 text-zinc-700">
                            <p>
                                <span class="font-semibold">{{ t.successPage.date }}:</span> {{ t.successPage.dateValue }}
                            </p>
                            <p>
                                <span class="font-semibold">{{ t.successPage.location }}:</span>
                                {{ t.successPage.locationValue }}
                            </p>
                            <p class="text-sm text-zinc-600">
                                {{ t.successPage.address }}
                            </p>
                        </div>
                    </div>

                    <!-- Reference -->
                    <div class="bg-zinc-50 rounded-lg p-6 mb-6 text-center">
                        <p
                            class="text-sm text-zinc-600 uppercase tracking-wide mb-2"
                        >
                            {{ t.successPage.referenceNumber }}
                        </p>
                        <p
                            class="font-mono text-2xl font-bold text-emerald-600 bg-white px-6 py-3 rounded-lg inline-block"
                        >
                            HOREB-{{ String(registration.id).padStart(6, "0") }}
                        </p>
                        <p class="text-xs text-zinc-500 mt-3">
                            {{ t.successPage.referenceNote }}
                        </p>
                    </div>

                    <!-- Download Voucher -->
                    <!-- <div class="text-center mb-6">
                        <a
                            :href="`/api/registrations/${registration.id}/voucher`"
                            class="inline-flex items-center gap-3 bg-emerald-500 text-white px-8 py-4 rounded-lg font-semibold transition-all hover:bg-emerald-600 hover:scale-105"
                            target="_blank"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                ></path>
                            </svg>
                            Descargar Comprobante PDF
                        </a>
                    </div> -->

                    <!-- Next Steps -->
                    <div class="border-t border-zinc-200 pt-6">
                        <h3 class="font-bold text-zinc-900 mb-4">
                            {{ t.successPage.nextSteps }}:
                        </h3>
                        <ul class="space-y-3 text-zinc-700">
                            <li class="flex items-start gap-3">
                                <svg
                                    class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>{{ t.successPage.step1 }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg
                                    class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>{{ t.successPage.step2 }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg
                                    class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>{{ t.successPage.step3 }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg
                                    class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>{{ t.successPage.step4 }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg
                                    class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>{{ t.successPage.step5 }}</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Back to Home -->
                    <div class="mt-8 text-center">
                        <router-link
                            to="/"
                            class="text-emerald-600 hover:text-emerald-700 font-medium inline-flex items-center gap-2"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"
                                ></path>
                            </svg>
                            {{ t.successPage.backButton }}
                        </router-link>
                    </div>
                </div>
            </div>

            <!-- Error State -->
            <div v-else class="bg-white rounded-xl shadow-2xl p-8 text-center">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-red-100 rounded-full mb-4"
                >
                    <svg
                        class="w-12 h-12 text-red-500"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        ></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">
                    {{ currentLang === 'es' ? 'Registro no encontrado' : 'Registration not found' }}
                </h2>
                <p class="text-zinc-600 mb-6">
                    {{ currentLang === 'es' ? 'No pudimos cargar la información de tu registro.' : 'We could not load your registration information.' }}
                </p>
                <router-link
                    to="/"
                    class="inline-block bg-emerald-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-600"
                >
                    {{ t.successPage.backButton }}
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import { ref, onMounted, computed } from "vue";
import { useRoute } from "vue-router";
import axios from "axios";
import { translations } from "../i18n/translations.js";

export default {
    name: "Success",
    setup() {
        const route = useRoute();
        const loading = ref(true);
        const registration = ref(null);
        const currentLang = ref(localStorage.getItem('language') || 'es');
        
        const t = computed(() => translations[currentLang.value]);

        onMounted(async () => {
            const registrationId = route.query.registration;

            if (!registrationId) {
                loading.value = false;
                return;
            }

            try {
                const response = await axios.get(
                    `/api/registrations/${registrationId}`
                );
                registration.value = response.data.registration;
                
                // Set language from registration if available
                if (registration.value.language) {
                    currentLang.value = registration.value.language;
                }
            } catch (error) {
                console.error("Error loading registration:", error);
            } finally {
                loading.value = false;
            }
        });

        return {
            loading,
            registration,
            currentLang,
            t
        };
    },
};
</script>
