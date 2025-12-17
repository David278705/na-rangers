import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Success from "../pages/Success.vue";
import Registrations from "../pages/Registrations.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/success",
        name: "Success",
        component: Success,
    },
    {
        path: "/registros",
        name: "Registrations",
        component: Registrations,
    },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
