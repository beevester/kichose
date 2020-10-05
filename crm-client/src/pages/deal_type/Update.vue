<template>
  <is-main-template
    title="deal_type_edit"
    :title-params="{ entity: item && item.name }"
  >
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
  created() {
    this.getItem(this.$route.params.id)
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      getItem: 'dealType/getItem',
      update: 'dealType/update',
      reset: 'dealType/reset'
    }),
    onSendForm() {
      this.update()
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
