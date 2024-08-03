export const routes = [
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
    meta: { layout: 'auth' },
  },
  {
    path: '/',
    component: () => import('@/layouts/default.vue'),
    meta: { layout: 'front-office' },
    children: [
      {
        path: '',
        component: () => import('@/views/front-office/home.vue')
      }
    ]
  },
  {
    path: '/admin',
    component: () => import('@/layouts/admin.vue'),
    meta: { layout: 'back-office' },
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
