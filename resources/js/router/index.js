import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Success from "../pages/Success.vue";

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
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
