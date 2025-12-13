<template>
    <div class="min-h-screen">
        <!-- Landing Section -->
        <section v-if="!showForm" class="min-h-screen relative">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img
                    src="/public/img/wallpaper.jpg"
                    alt="HOREB Colombia 2026"
                    class="w-full h-full object-cover"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-b from-slate-900/80 via-slate-900/70 to-slate-900/90"
                ></div>
            </div>

            <!-- Content -->
            <div
                class="relative z-10 container mx-auto px-6 py-20 max-w-5xl min-h-screen flex flex-col justify-center"
            >
                <div class="space-y-16">
                    <!-- Title Section -->
                    <div class="space-y-6">
                        <div
                            class="flex items-center gap-2 text-sm text-emerald-400"
                        >
                            <svg
                                class="w-4 h-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                            </svg>
                            <span>Villeta, Colombia</span>
                            <span class="text-emerald-500/50">•</span>
                            <span>2 - 5 de Abril, 2026</span>
                        </div>

                        <h1
                            class="text-6xl md:text-7xl font-bold text-white tracking-tight"
                        >
                            Retiro de Hombres
                            <span class="block text-emerald-400 mt-2"
                                >HOREB 2026</span
                            >
                        </h1>

                        <p class="text-xl text-white/90 max-w-2xl">
                            Un encuentro transformador en las montañas de
                            Colombia
                        </p>
                    </div>

                    <!-- CTA -->
                    <div>
                        <button
                            @click="showForm = true"
                            class="inline-flex items-center gap-3 bg-emerald-500 text-white px-10 py-5 rounded-lg text-lg font-semibold transition-transform shadow-lg hover:scale-105"
                        >
                            Registrarse Ahora
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
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>
                        </button>
                    </div>

                    <!-- Location -->
                    <div class="border-t border-white/20 pt-8">
                        <p class="text-sm text-white/70">
                            Kilómetro 5 Vía Villeta / La Vega — Restaurante Los
                            Abuelos, Villeta Colombia
                        </p>
                        <div class="mt-3 flex items-center gap-2 text-white/60">
                            <svg
                                class="w-4 h-4"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                                />
                            </svg>
                            <span class="text-sm">@na.rangers</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Form Section -->
        <section
            v-else
            class="min-h-screen bg-gradient-to-br from-slate-800 via-slate-700 to-emerald-800 py-16 px-6"
        >
            <div class="max-w-2xl mx-auto">
                <!-- Banner Wallpaper -->
                <div class="mb-8 rounded-xl overflow-hidden shadow-xl">
                    <img
                        src="/public/img/wallpaper.jpg"
                        alt="HOREB 2026"
                        class="w-full h-48 object-cover"
                    />
                </div>

                <!-- Back Button -->
                <button
                    @click="showForm = false"
                    class="mb-8 flex items-center gap-2 text-white/70 hover:text-white transition-colors"
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
                        />
                    </svg>
                    <span class="text-sm font-medium">Volver</span>
                </button>

                <!-- Form Card -->
                <div class="bg-white rounded-xl p-8 md:p-12 shadow-2xl">
                    <div class="mb-10">
                        <h2 class="text-4xl font-bold text-zinc-900 mb-3">
                            Registro
                        </h2>
                        <p class="text-zinc-600 text-lg">
                            Completa tus datos para asegurar tu lugar en HOREB
                            2026
                        </p>
                    </div>

                    <form @submit.prevent="handleSubmit" class="space-y-6">
                        <!-- Nombre y Apellido -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label
                                    class="block text-sm font-medium text-zinc-700"
                                >
                                    Nombre *
                                </label>
                                <input
                                    v-model="formData.firstName"
                                    type="text"
                                    required
                                    class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                    placeholder="Tu nombre"
                                />
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="block text-sm font-medium text-zinc-700"
                                >
                                    Apellido *
                                </label>
                                <input
                                    v-model="formData.lastName"
                                    type="text"
                                    required
                                    class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                    placeholder="Tu apellido"
                                />
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Correo Electrónico *
                            </label>
                            <input
                                v-model="formData.email"
                                type="email"
                                required
                                class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                placeholder="tu@correo.com"
                            />
                        </div>

                        <!-- Fecha de Nacimiento y Documento -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label
                                    class="block text-sm font-medium text-zinc-700"
                                >
                                    Fecha de Nacimiento *
                                </label>
                                <input
                                    v-model="formData.dateOfBirth"
                                    type="date"
                                    required
                                    class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                />
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="block text-sm font-medium text-zinc-700"
                                >
                                    Documento de Identidad *
                                </label>
                                <input
                                    v-model="formData.documentId"
                                    type="text"
                                    required
                                    class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                    placeholder="Cédula o Pasaporte"
                                />
                            </div>
                        </div>

                        <!-- Lugar de Origen -->
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Lugar de Origen o Residencia *
                            </label>
                            <input
                                v-model="formData.placeOfOrigin"
                                type="text"
                                required
                                class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                placeholder="Ciudad, País"
                            />
                        </div>

                        <!-- Ministerio -->
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Iglesia o Ministerio al que perteneces *
                            </label>
                            <select
                                v-model="formData.ministry"
                                required
                                class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                            >
                                <option value="" disabled>
                                    Selecciona una opción
                                </option>
                                <option value="NA Canada">NA Canada</option>
                                <option value="NA Colombia">NA Colombia</option>
                                <option value="NA USA">NA USA</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>

                        <!-- Otro Ministerio (condicional) -->
                        <div
                            v-if="formData.ministry === 'Otro'"
                            class="space-y-2"
                        >
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Especifica el Ministerio *
                            </label>
                            <input
                                v-model="formData.ministryOther"
                                type="text"
                                required
                                class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                placeholder="Nombre del ministerio"
                            />
                        </div>

                        <!-- Talla de Camiseta -->
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Talla para Camiseta de Ranger *
                            </label>
                            <select
                                v-model="formData.shirtSize"
                                required
                                class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                            >
                                <option value="" disabled>
                                    Selecciona tu talla
                                </option>
                                <option value="S">S - Small</option>
                                <option value="M">M - Medium</option>
                                <option value="L">L - Large</option>
                                <option value="XL">XL - Extra Large</option>
                                <option value="XXL">XXL - 2X Large</option>
                            </select>
                        </div>

                        <!-- Condición Médica -->
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Condición Médica
                            </label>
                            <textarea
                                v-model="formData.medicalConditions"
                                rows="2"
                                class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all resize-none"
                                placeholder="Menciona condiciones que debamos conocer (opcional)"
                            ></textarea>
                        </div>

                        <!-- Alergias -->
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Alergias
                            </label>
                            <textarea
                                v-model="formData.allergies"
                                rows="2"
                                class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all resize-none"
                                placeholder="Describe cualquier alergia (opcional)"
                            ></textarea>
                        </div>

                        <!-- Contacto de Emergencia -->
                        <div class="space-y-4">
                            <label
                                class="block text-sm font-medium text-zinc-700"
                            >
                                Contacto de Emergencia *
                            </label>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="block text-xs text-zinc-600">
                                        Nombre
                                    </label>
                                    <input
                                        v-model="formData.emergencyContactName"
                                        type="text"
                                        required
                                        class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                        placeholder="Nombre completo"
                                    />
                                </div>

                                <div class="space-y-2">
                                    <label class="block text-xs text-zinc-600">
                                        Teléfono
                                    </label>
                                    <input
                                        v-model="formData.emergencyContactPhone"
                                        type="tel"
                                        required
                                        class="w-full border border-zinc-300 rounded-lg px-4 py-3 text-zinc-900 placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                                        placeholder="+57 300 123 4567"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button
                                type="submit"
                                :disabled="loading"
                                :class="[
                                    'w-full font-bold py-4 rounded-lg transition-all',
                                    loading
                                        ? 'bg-gray-400 cursor-not-allowed'
                                        : 'bg-emerald-500 text-white hover:scale-105',
                                ]"
                            >
                                <span
                                    v-if="loading"
                                    class="flex items-center justify-center gap-2"
                                >
                                    <svg
                                        class="animate-spin h-5 h-5 text-white"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <circle
                                            class="opacity-25"
                                            cx="12"
                                            cy="12"
                                            r="10"
                                            stroke="currentColor"
                                            stroke-width="4"
                                        ></circle>
                                        <path
                                            class="opacity-75"
                                            fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                        ></path>
                                    </svg>
                                    Procesando...
                                </span>
                                <span v-else>Registrarse</span>
                            </button>
                        </div>

                        <p class="text-center text-zinc-500 text-xs">
                            Los campos marcados con * son obligatorios
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { ref, reactive } from "vue";
import axios from "axios";

export default {
    name: "Home",
    setup() {
        const showForm = ref(false);
        const loading = ref(false);

        const formData = reactive({
            firstName: "",
            lastName: "",
            email: "",
            dateOfBirth: "",
            documentId: "",
            placeOfOrigin: "",
            ministry: "",
            ministryOther: "",
            shirtSize: "",
            medicalConditions: "",
            allergies: "",
            emergencyContactName: "",
            emergencyContactPhone: "",
        });

        const handleSubmit = async () => {
            // Mostrar confirmación con SweetAlert
            const result = await Swal.fire({
                title: "¿Confirmar Registro?",
                html: `
                    <div class="text-left space-y-2 text-sm">
                        <p class="font-semibold text-gray-700">Por favor verifica tus datos:</p>
                        <p><strong>Nombre:</strong> ${formData.firstName} ${
                    formData.lastName
                }</p>
                        <p><strong>Email:</strong> ${formData.email}</p>
                        <p><strong>Ministerio:</strong> ${
                            formData.ministry === "Otro"
                                ? formData.ministryOther
                                : formData.ministry
                        }</p>
                    </div>
                `,
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#10b981",
                cancelButtonColor: "#6b7280",
                confirmButtonText: "Sí, confirmar registro",
                cancelButtonText: "Revisar datos",
                width: "500px",
            });

            if (!result.isConfirmed) {
                return;
            }

            try {
                loading.value = true;

                // Crear registro
                const response = await axios.post("/api/registrations", {
                    first_name: formData.firstName,
                    last_name: formData.lastName,
                    email: formData.email,
                    date_of_birth: formData.dateOfBirth,
                    document_id: formData.documentId,
                    place_of_origin: formData.placeOfOrigin,
                    ministry: formData.ministry,
                    ministry_other:
                        formData.ministry === "Otro"
                            ? formData.ministryOther
                            : null,
                    shirt_size: formData.shirtSize,
                    medical_conditions: formData.medicalConditions || null,
                    allergies: formData.allergies || null,
                    emergency_contact_name: formData.emergencyContactName,
                    emergency_contact_phone: formData.emergencyContactPhone,
                });

                const { registration } = response.data;

                // Mostrar éxito
                Swal.fire({
                    icon: "success",
                    title: "¡Registro Exitoso!",
                    html: `
                        <p class="text-lg mb-2">Tu registro ha sido completado.</p>
                        <p class="text-sm text-gray-600">Recibirás un correo con tu comprobante.</p>
                    `,
                    confirmButtonColor: "#10b981",
                    confirmButtonText: "Ver Comprobante",
                }).then(() => {
                    window.location.href = `/#/success?registration=${registration.id}`;
                });
            } catch (error) {
                console.error("Error creating registration:", error);

                let errorMessage = "Ocurrió un error procesando tu registro.";

                if (error.response?.data?.message) {
                    errorMessage = error.response.data.message;
                } else if (error.response?.data?.errors) {
                    const errors = Object.values(
                        error.response.data.errors
                    ).flat();
                    errorMessage = errors.join("<br>");
                }

                Swal.fire({
                    icon: "error",
                    title: "Error en el Registro",
                    html: errorMessage,
                    confirmButtonColor: "#ef4444",
                });
            } finally {
                loading.value = false;
            }
        };

        const selectPromoPrice = () => {
            selectedPrice.value = 80000000;
        };

        const selectRegularPrice = () => {
            selectedPrice.value = 100000000;
        };

        return {
            showForm,
            loading,
            formData,
            handleSubmit,
        };
    },
};
</script>
