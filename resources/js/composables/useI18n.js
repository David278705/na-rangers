import { ref, computed } from 'vue';
import { translations } from '../i18n/translations.js';

const currentLang = ref(localStorage.getItem('language') || 'es');

export function useI18n() {
    const t = computed(() => translations[currentLang.value]);
    
    const changeLanguage = (lang) => {
        if (lang === 'es' || lang === 'en') {
            currentLang.value = lang;
            localStorage.setItem('language', lang);
        }
    };
    
    return {
        t,
        currentLang,
        changeLanguage
    };
}
