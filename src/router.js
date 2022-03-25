import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

var routes =[
    { 
        path: '', 
        component: require('./view/Home.vue').default,
    },
    { 
        path: '/nosotros', 
        component: require('./view/Nosotros.vue').default,
    },
    {
        path: '/certificaciones',
        component: require('./view/Certificaciones.vue').default,
    },
    {
        path: '/productos',
        component: require('./view/Productos.vue').default,
    },
    // {
    //     path: '/servicios',
    //     component: require('./view/Servicios.vue').default,
    // },
    {
        path: '/contacto',
        component: require('./view/Contacto.vue').default,
    },
    {
        path: '/*',
        component: require('./view/404.vue').default
    }
];




var router=new VueRouter({
    mode: 'history',
    routes,
    linkExactActiveClass: "active",
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    }
});
export default router;