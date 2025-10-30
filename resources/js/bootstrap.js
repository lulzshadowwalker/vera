import axios from 'axios';
import Alpine from 'alpinejs'
import ajax from '@imacrayon/alpine-ajax'

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Alpine = Alpine
Alpine.plugin(ajax)
Alpine.start()
