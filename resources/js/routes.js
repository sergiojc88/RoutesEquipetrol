const Home = ()=> import('./components/Home.vue')
const Contact = ()=> import('./components/Contact.vue')

//import Driver
const Show = ()=> import('./components/Driver/Show.vue')
const Create = ()=> import('./components/Driver/Create.vue')
const Edit = ()=> import('./components/Driver/Edit.vue')

export const routes = [
    {
        name:'home',
        path:'/',
        component:Home
    },
    {
        name:'contact',
        path:'/contact',
        component:Contact
    },
    {
        name:'showDriver',
        path:'/Driver',
        component:Show
    },
    {
        name:'createDriver',
        path:'/Create',
        component:Create
    },
    {
        name:'editDriver',
        path:'/Edit/:id',
        component:Edit
    },
]
