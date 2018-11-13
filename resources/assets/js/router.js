import VueRouter from 'vue-router'
import LoginPage from './components/Page/LoginPage'
import RegisterPage from './components/Page/RegisterPage'
import HomePage from './components/Page/HomePage'
import MaterialSurveyPage from './components/Page/MaterialSurveyPage'
import RecipeSurveyPage from './components/Page/RecipeSurveyPage.vue'
import ConfirmEmailPage from './components/Page/ConfirmEmailPage.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomePage,
    },
    {
        path: '/home',
        name: 'home',
        component: HomePage,
    },
    {
        path: '/login',
        name: 'login',
        component: LoginPage,
    },
    {
        path: '/register',
        name: 'register',
        component: RegisterPage,
    },
    {
        path: '/profile',
        name: 'profile',
        component: RegisterPage,
    },
    {
        path: '/material-survey',
        name: 'material-survey',
        component: MaterialSurveyPage,
    },
    {
        path: '/recipe-survey',
        name: 'recipe-survey',
        component: RecipeSurveyPage,
    },
    {
        path: '/password-reset',
        name: 'password-request',
        component: ConfirmEmailPage,
    },
]

const router = new VueRouter({ routes, mode:'history' })

const isAuthenticateRoutes = (route) => ['login', 'register', 'password-request'].indexOf(route.name) !== -1

router.beforeEach((to, from, next) => {
    if (window.user && isAuthenticateRoutes(to)) {
            next({ name: 'home' })
        return
    }

    if (!window.user && !isAuthenticateRoutes(to)) {
        next({ name: 'login' })
        return
    }

    next()
})

export default router