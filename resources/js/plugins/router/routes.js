export const routes = [
  { path: '/', redirect: '/home' },
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
    path: '/',
    component: () => import('@/layouts/blank.vue'),
    children: [
      {
        path: 'login',
        component: () => import('@/views/auth/login.vue'),
      },
      {
        path: 'register',
        component: () => import('@/views/auth/register.vue'),
      },
      {
        path: '/:pathMatch(.*)*',
        component: () => import('@/views/[...error].vue'),
      },
    ],
  },
  {
    path: '/admin',
    component: () => import('@/layouts/admin.vue'),
    children: [
      {
        path: 'dashboard',
        component: () => import('@/views/back-office/dashboard.vue'),
      },
      {
        path: 'user',
        component: () => import('@/views/back-office/customer/index.vue'),
      }
    ],
  }
]
