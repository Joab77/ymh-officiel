import { createApp } from 'vue'
import App from '@/App.vue'
import { router } from '@/plugins/router/index.js'
import { registerPlugins } from '@core/utils/plugins'
// Swal2 plugins
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import '@core-scss/template/index.scss'
import '@layouts/styles/index.scss'

// Create vue app
let app = createApp(App)

function initApp(app, withRegisterPlugins = false) {
  if (app) {
    app.unmount()
  }
  app = createApp(App)

  if(withRegisterPlugins){
    registerPlugins(app);
  }else {
    app.use(router)
  }

  app.use(VueSweetalert2);
  app.mount('#app')
}

router.beforeEach((to, from, next) => {
  if (to.meta.layout !== 'front-office') {
    initApp(app,true)
  } else {
    initApp(app,false)
  }
  next();
});

app.use(router)
app.use(VueSweetalert2);
app.mount('#app')


