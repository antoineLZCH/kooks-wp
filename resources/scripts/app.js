window.$ = jQuery
require('url-search-params-polyfill');

import Swiper, {Navigation, Pagination} from 'swiper';
import 'swiper/swiper-bundle.min.css';

Swiper.use([Navigation, Pagination]);
window.Swiper = Swiper;

require('./blocks')
