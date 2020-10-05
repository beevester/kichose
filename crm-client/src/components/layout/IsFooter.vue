<template>
  <v-footer :app="app" color="secondary" dark class="caption" min-height="32">
    <v-row no-gutters justify="space-between">
      <v-col cols="12" sm="auto" class="text-center">
        {{ fecha.format(new Date(), 'YYYY') }},
        <a href="http://www.kichose.co.za/" class="white--text" target="_blank">
          Kichose Group CRM </a
        >, v1.0.0
      </v-col>
      <v-col cols="12" sm="auto" class="text-center">
        {{ $t('powered_by') }}
        <a href="http://www.kichose.co.za" class="white--text" target="_blank">
          Kichose Group
        </a>
      </v-col>
    </v-row>
  </v-footer>
</template>

<script>
import fecha from 'fecha'

export default {
  name: 'FooterSlot',
  props: {
    app: {
      type: Boolean,
      default: true
    }
  },
  data() {
    return {
      fecha
    }
  }
}
</script>
