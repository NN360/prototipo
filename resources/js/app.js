import './bootstrap';

import { createApp } from 'vue';
import navbar from './layouts/navbar.vue';
import cuerpo_index from './layouts/cuerpo_index.vue';
import footer from './layouts/footer.vue';
import cuerpo_nosotros from './layouts/cuerpo_nosotros.vue';

import Swal from 'sweetalert2';
window.Swal = Swal;

createApp (navbar).mount('#navbar');
createApp (cuerpo_index).mount('#cuerpo_index');
createApp (cuerpo_nosotros).mount('#cuerpo_nosotros');
createApp (footer).mount('#footer');