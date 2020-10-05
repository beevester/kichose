<template>
  <is-main-template title="project_type_add">
    <deal-type-form :handle-submit="onSendForm" :item="item" />
  </is-main-template>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import DealTypeForm from './Form'

export default {
  components: {
    DealTypeForm
  },
  computed: {
    ...mapGetters({
      item: 'dealType/item'
    })
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      create: 'dealType/create',
      reset: 'dealType/reset'
    }),
    onSendForm() {
      this.create()
        .then(item => {
          this.$router.push({
            name: 'DealTypeShow',
            params: { id: item.id }
          })
        })
        .catch()
    }
  }
}
</script>
