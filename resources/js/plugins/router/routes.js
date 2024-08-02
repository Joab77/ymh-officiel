export const routes = [
  { path: '/', redirect: '/auth' },
  {
    path: '/auth',
    component: () => import('@/layouts/blank.vue'),
    redirect: '/auth/login',
    children: [
      {
        path: 'login',
        name: 'login',
        component: () => import('@/views/auth/login.vue'),
      },
      {
        path: 'register',
        name: 'register',
        component: () => import('@/views/auth/register.vue'),
      },
      {
        path: 'forgot-password',
        name: 'forgot-password',
        component: () => import('@/views/auth/forgot-password.vue'),
      },
      {
        path: 'reset-password',
        name: 'reset-password',
        component: () => import('@/views/auth/reset-password.vue'),
      },
      {
        path: '/:pathMatch(.*)*',
        name: 'error',
        component: () => import('@/views/[...error].vue'),
      },
    ],
  },
  {
    path: '/',
    component: () => import('@/layouts/default.vue'),
    children: [
      {
        path: 'home',
        component: () => import('@/views/front-office/home.vue')
      }
    ]
  },
  {
    path: '/admin',
    component: () => import('@/layouts/admin.vue'),
    children: [
      {
        path: 'dashboard',
        component: () => import('@/views/back-office/dashboard/index.vue'),
      },
      {
        path: 'user',
        component: () => import('@/views/back-office/customer/index.vue'),
      }
    ],
  }
]
