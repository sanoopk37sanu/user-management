import { createRouter,createWebHistory } from "vue-router";

import UserLists from '../components/UserLists.vue';

import notfound from '../components/Notfound.vue';
const routes=[

    {
         path:'/',
         component:UserLists

    },
   {
    path:'/:pathMatch(.*)*',
    component:notfound

},
]

const router=createRouter({
history:createWebHistory(),
routes,

})

export default router
