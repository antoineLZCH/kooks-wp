import Vue from 'vue'
import MapComponent from './MapComponent.vue'

import {LMap, LTileLayer, LMarker, LIcon, LPopup} from "vue2-leaflet"
import 'leaflet/dist/leaflet.css'

delete L.Icon.Default.prototype._getIconUrl

L.Icon.Default.mergeOptions({
  iconRetinaUrl: 'https://kooks.ams3.digitaloceanspaces.com/restart/mascotte.png',
  iconUrl: 'https://kooks.ams3.digitaloceanspaces.com/restart/mascotte.png',
  shadowUrl: ''
})

Vue.component('l-map', LMap)
Vue.component('l-tile-layer', LTileLayer)
Vue.component('l-marker', LMarker)
Vue.component('l-icon', LIcon)
Vue.component('l-popup', LPopup)

new Vue({
  el: "#kooks-map",
  components: {MapComponent}
})
