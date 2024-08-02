import { createApp } from 'vue'
import App from '@/App.vue'
import { registerPlugins } from '@core/utils/plugins'

// Swal2 plugins
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

// Styles
import '@core-scss/template/index.scss'
import '@layouts/styles/index.scss'

// Create vue app
const app = createApp(App)

app.use(VueSweetalert2);

// Register plugins
registerPlugins(app)

// Mount vue app
app.mount('#app')
