<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-800 via-slate-700 to-emerald-800 py-8 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 mb-6 border border-white/20">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-bold text-white mb-2">Registros HOREB 2026</h1>
                        <p class="text-white/70">Total de registros: {{ totalRegistrations }}</p>
                    </div>
                    <div class="flex gap-3">
                        <button
                            @click="exportToExcel"
                            class="flex items-center gap-2 bg-emerald-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-600 transition-colors"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Exportar Excel
                        </button>
                        <button
                            @click="$router.push('/')"
                            class="flex items-center gap-2 bg-white/20 text-white px-6 py-3 rounded-lg font-semibold hover:bg-white/30 transition-colors"
                        >
                            Volver al Inicio
                        </button>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 mb-6 border border-white/20">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Search -->
                    <div class="md:col-span-2">
                        <label class="block text-white/80 text-sm font-medium mb-2">Buscar</label>
                        <input
                            v-model="filters.search"
                            @input="debouncedSearch"
                            type="text"
                            placeholder="Nombre, email, documento..."
                            class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        />
                    </div>

                    <!-- Ministry Filter -->
                    <div>
                        <label class="block text-white/80 text-sm font-medium mb-2">Ministerio</label>
                        <select
                            v-model="filters.ministry"
                            @change="fetchRegistrations"
                            class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        >
                            <option value="all">Todos</option>
                            <option value="NA Canada">NA Canada</option>
                            <option value="NA Colombia">NA Colombia</option>
                            <option value="NA USA">NA USA</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <!-- Language Filter -->
                    <div>
                        <label class="block text-white/80 text-sm font-medium mb-2">Idioma</label>
                        <select
                            v-model="filters.language"
                            @change="fetchRegistrations"
                            class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        >
                            <option value="all">Todos</option>
                            <option value="es">Español</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl border border-white/20 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-emerald-600/80">
                            <tr>
                                <th class="px-4 py-3 text-left text-white font-semibold cursor-pointer hover:bg-emerald-700/50" @click="sortBy('id')">
                                    <div class="flex items-center gap-2">
                                        ID
                                        <svg v-if="sortField === 'id'" class="w-4 h-4" :class="sortDirection === 'asc' ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-left text-white font-semibold cursor-pointer hover:bg-emerald-700/50" @click="sortBy('first_name')">
                                    <div class="flex items-center gap-2">
                                        Nombre
                                        <svg v-if="sortField === 'first_name'" class="w-4 h-4" :class="sortDirection === 'asc' ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-left text-white font-semibold">Email</th>
                                <th class="px-4 py-3 text-left text-white font-semibold">Teléfono</th>
                                <th class="px-4 py-3 text-left text-white font-semibold">Documento</th>
                                <th class="px-4 py-3 text-left text-white font-semibold">Ministerio</th>
                                <th class="px-4 py-3 text-left text-white font-semibold">Talla</th>
                                <th class="px-4 py-3 text-left text-white font-semibold cursor-pointer hover:bg-emerald-700/50" @click="sortBy('created_at')">
                                    <div class="flex items-center gap-2">
                                        Fecha
                                        <svg v-if="sortField === 'created_at'" class="w-4 h-4" :class="sortDirection === 'asc' ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center text-white font-semibold">Acciones</th>
                            </tr>
                        </thead>
                        <tbody v-if="!loading && registrations.length > 0" class="divide-y divide-white/10">
                            <tr v-for="reg in registrations" :key="reg.id" class="hover:bg-white/5 transition-colors">
                                <td class="px-4 py-3 text-white font-mono text-sm">
                                    {{ String(reg.id).padStart(4, '0') }}
                                </td>
                                <td class="px-4 py-3 text-white">
                                    {{ reg.first_name }} {{ reg.last_name }}
                                </td>
                                <td class="px-4 py-3 text-white/80 text-sm">
                                    {{ reg.email }}
                                </td>
                                <td class="px-4 py-3 text-white/80 text-sm">
                                    {{ reg.phone || 'N/A' }}
                                </td>
                                <td class="px-4 py-3 text-white/80 text-sm">
                                    {{ reg.document_id }}
                                </td>
                                <td class="px-4 py-3 text-white/80 text-sm">
                                    <span v-if="reg.ministry === 'Otro' || reg.ministry === 'Other'" class="text-xs">
                                        {{ reg.ministry_other }}
                                    </span>
                                    <span v-else>{{ reg.ministry }}</span>
                                </td>
                                <td class="px-4 py-3 text-white/80">
                                    <span class="inline-flex items-center px-2 py-1 rounded bg-emerald-500/20 text-emerald-300 text-xs font-medium">
                                        {{ reg.shirt_size }}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-white/80 text-sm">
                                    {{ formatDate(reg.created_at) }}
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <button
                                        @click="viewDetails(reg)"
                                        class="inline-flex items-center gap-1 text-emerald-400 hover:text-emerald-300 transition-colors"
                                        title="Ver detalles"
                                    >
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Loading State -->
                    <div v-if="loading" class="text-center py-12">
                        <div class="inline-block animate-spin rounded-full h-12 w-12 border-4 border-white/20 border-t-emerald-500"></div>
                        <p class="text-white/70 mt-4">Cargando registros...</p>
                    </div>

                    <!-- Empty State -->
                    <div v-if="!loading && registrations.length === 0" class="text-center py-12">
                        <svg class="w-16 h-16 mx-auto text-white/30 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                        <p class="text-white/70">No se encontraron registros</p>
                    </div>
                </div>

                <!-- Pagination -->
                <div v-if="!loading && registrations.length > 0" class="bg-white/5 px-6 py-4 flex items-center justify-between border-t border-white/10">
                    <div class="text-white/70 text-sm">
                        Mostrando {{ pagination.from }} a {{ pagination.to }} de {{ pagination.total }} registros
                    </div>
                    <div class="flex gap-2">
                        <button
                            @click="goToPage(pagination.current_page - 1)"
                            :disabled="pagination.current_page === 1"
                            :class="pagination.current_page === 1 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-white/20'"
                            class="px-4 py-2 rounded-lg bg-white/10 text-white transition-colors disabled:hover:bg-white/10"
                        >
                            Anterior
                        </button>
                        <span class="px-4 py-2 text-white/70">
                            Página {{ pagination.current_page }} de {{ pagination.last_page }}
                        </span>
                        <button
                            @click="goToPage(pagination.current_page + 1)"
                            :disabled="pagination.current_page === pagination.last_page"
                            :class="pagination.current_page === pagination.last_page ? 'opacity-50 cursor-not-allowed' : 'hover:bg-white/20'"
                            class="px-4 py-2 rounded-lg bg-white/10 text-white transition-colors disabled:hover:bg-white/10"
                        >
                            Siguiente
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Details Modal -->
        <div v-if="selectedRegistration" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 z-50" @click.self="selectedRegistration = null">
            <div class="bg-slate-800 rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto border border-white/20 shadow-2xl">
                <div class="sticky top-0 bg-gradient-to-r from-emerald-600 to-emerald-700 px-6 py-4 flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-white">Detalles del Registro</h2>
                    <button @click="selectedRegistration = null" class="text-white hover:text-white/80 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="p-6 space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">ID</label>
                            <p class="text-white font-mono">HOREB-{{ String(selectedRegistration.id).padStart(6, '0') }}</p>
                        </div>
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Idioma</label>
                            <p class="text-white">{{ selectedRegistration.language === 'es' ? 'Español' : 'English' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Nombre</label>
                            <p class="text-white">{{ selectedRegistration.first_name }}</p>
                        </div>
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Apellido</label>
                            <p class="text-white">{{ selectedRegistration.last_name }}</p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Email</label>
                        <p class="text-white">{{ selectedRegistration.email }}</p>
                    </div>

                    <div>
                        <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Teléfono</label>
                        <p class="text-white">{{ selectedRegistration.phone || 'N/A' }}</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Fecha de Nacimiento</label>
                            <p class="text-white">{{ formatBirthDate(selectedRegistration.date_of_birth) }}</p>
                        </div>
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Documento</label>
                            <p class="text-white">{{ selectedRegistration.document_id }}</p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Lugar de Origen</label>
                        <p class="text-white">{{ selectedRegistration.place_of_origin }}</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Ministerio</label>
                            <p class="text-white">
                                {{ selectedRegistration.ministry === 'Otro' || selectedRegistration.ministry === 'Other' 
                                    ? selectedRegistration.ministry_other 
                                    : selectedRegistration.ministry }}
                            </p>
                        </div>
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Talla</label>
                            <p class="text-white">{{ selectedRegistration.shirt_size }}</p>
                        </div>
                    </div>

                    <div v-if="selectedRegistration.medical_conditions">
                        <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Condiciones Médicas</label>
                        <p class="text-white">{{ selectedRegistration.medical_conditions }}</p>
                    </div>

                    <div v-if="selectedRegistration.allergies">
                        <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Alergias</label>
                        <p class="text-white">{{ selectedRegistration.allergies }}</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Contacto de Emergencia</label>
                            <p class="text-white">{{ selectedRegistration.emergency_contact_name }}</p>
                        </div>
                        <div>
                            <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Teléfono</label>
                            <p class="text-white">{{ selectedRegistration.emergency_contact_phone }}</p>
                        </div>
                    </div>

                    <div class="border-t border-white/10 pt-4">
                        <label class="block text-white/50 text-xs uppercase tracking-wider mb-1">Fecha de Registro</label>
                        <p class="text-white">{{ formatDate(selectedRegistration.created_at) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref, reactive, computed, onMounted } from 'vue';
import axios from 'axios';

export default {
    name: 'Registrations',
    setup() {
        const registrations = ref([]);
        const loading = ref(false);
        const selectedRegistration = ref(null);
        const sortField = ref('created_at');
        const sortDirection = ref('desc');
        
        const filters = reactive({
            search: '',
            ministry: 'all',
            language: 'all',
        });

        const pagination = reactive({
            current_page: 1,
            last_page: 1,
            per_page: 15,
            total: 0,
            from: 0,
            to: 0,
        });

        const totalRegistrations = computed(() => pagination.total);

        let searchTimeout;
        const debouncedSearch = () => {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                fetchRegistrations();
            }, 500);
        };

        const fetchRegistrations = async (page = 1) => {
            loading.value = true;
            try {
                const params = {
                    page,
                    per_page: pagination.per_page,
                    sort_field: sortField.value,
                    sort_direction: sortDirection.value,
                };

                if (filters.search) params.search = filters.search;
                if (filters.ministry !== 'all') params.ministry = filters.ministry;
                if (filters.language !== 'all') params.language = filters.language;

                const response = await axios.get('/api/registrations', { params });
                
                registrations.value = response.data.data;
                pagination.current_page = response.data.current_page;
                pagination.last_page = response.data.last_page;
                pagination.total = response.data.total;
                pagination.from = response.data.from;
                pagination.to = response.data.to;
                pagination.per_page = response.data.per_page;
            } catch (error) {
                console.error('Error fetching registrations:', error);
            } finally {
                loading.value = false;
            }
        };

        const sortBy = (field) => {
            if (sortField.value === field) {
                sortDirection.value = sortDirection.value === 'asc' ? 'desc' : 'asc';
            } else {
                sortField.value = field;
                sortDirection.value = 'asc';
            }
            fetchRegistrations();
        };

        const goToPage = (page) => {
            if (page >= 1 && page <= pagination.last_page) {
                fetchRegistrations(page);
            }
        };

        const viewDetails = (registration) => {
            selectedRegistration.value = registration;
        };

        const formatDate = (dateString) => {
            const date = new Date(dateString);
            return date.toLocaleDateString('es-ES', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
            });
        };

        const formatBirthDate = (dateString) => {
            const date = new Date(dateString);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}/${month}/${year}`;
        };

        const exportToExcel = () => {
            window.open('/api/registrations/export/excel', '_blank');
        };

        onMounted(() => {
            fetchRegistrations();
        });

        return {
            registrations,
            loading,
            filters,
            pagination,
            totalRegistrations,
            selectedRegistration,
            sortField,
            sortDirection,
            debouncedSearch,
            fetchRegistrations,
            sortBy,
            goToPage,
            viewDetails,
            formatDate,
            formatBirthDate,
            exportToExcel,
        };
    },
};
</script>
