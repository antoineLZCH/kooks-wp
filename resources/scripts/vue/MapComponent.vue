<template>
  <div class="location-map">
    <l-map
      ref="locationMap"
      class="map"
      :zoom="zoom"
      :center="center"
    >
      <l-tile-layer :url="url"/>
      <l-marker
        :z-index-offset="selectedLocation === location ? 99 : 10"
        v-for="(location, index) in locations"
        :lat-lng="[location.coordinates.lat, location.coordinates.long]"
        :key="index"
      >
        <l-popup class="text-center">
          <img :src="location.logo.url" :alt="location.logo.alt" class="h-12 mx-auto mb-4 object-contain">
          <div class="name mb-4" v-text="location.name"></div>
          <div class="address">{{ location.address }}</div>
        </l-popup>
        <l-icon v-if="location.coordinates.lat && location.coordinates.long">
          <div class="dot-icon" :style="{backgroundColor: setRandomColor()}">K</div>
        </l-icon>
      </l-marker>
    </l-map>
  </div>
</template>

<script>
import leaflet from 'leaflet'

export default {
  name: 'MapComponent',
  props: ['locations', 'selectedLocation'],
  data: () => ({
    url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    maxZoom: 13,
    zoom: 12,
    map: null,
    center: [48.856613, 2.352222],
    bounds: null,
    overlayLocation: false,
    icon: 'https://kooks.ams3.digitaloceanspaces.com/restart/mascotte.png',
    showModal: true,
    colors: ['#ED722E', '#F6BE00', '#979B0B', '#DA2C81']
  }),
  mounted() {
    const bounds = new leaflet.latLngBounds()
    this.map = this.$refs.locationMap;

    this.locations.forEach(location => {
      bounds.extend(new leaflet.latLng(location.coordinates.lat, location.coordinates.long))
    })

    this.bounds = bounds
  },
  methods: {
    setRandomColor() {
      return this.colors[~~(Math.random() * this.colors.length)]
    }
  }
}
</script>

<style scoped lang="scss">
.location-map {
  width: 100%;
  height: 600px;
  overflow: hidden;
  margin-top: 80px;
  position: relative;
}

.map {
  @apply w-full;

  .map-icon {
    width: 32px;
    height: 32px;
    margin-top: -8px;
    margin-left: -10px;
  }

  .name {
    @apply text-orange font-bold uppercase tracking-wider;
  }

  .dot-icon {
    width: 24px;
    height: 24px;
    color: white;
    display: grid;
    border-radius: 50%;
    place-items: center;
    border: 2px solid white;
  }
}
</style>
