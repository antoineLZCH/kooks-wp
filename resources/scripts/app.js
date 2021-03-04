window.$ = jQuery
require('url-search-params-polyfill');

import SwiperCore, {EffectFade, Navigation, Pagination} from 'swiper'
import 'swiper/swiper-bundle.css';

SwiperCore.use([EffectFade, Navigation, Pagination])
window.Swiper = SwiperCore;


require('./features')
require('./blocks')
