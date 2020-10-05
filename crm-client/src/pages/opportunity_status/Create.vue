<template>
  <is-main-template title="opportunity_status_add">
    <opportunity-status-form :handle-submit="onSendForm" :item="item" />
  </is-main-template>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import OpportunityStatusForm from './Form'

export default {
  components: {
    OpportunityStatusForm
  },
  computed: {
    ...mapGetters({
      item: 'opportunityStatus/item'
    })
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      create: 'opportunityStatus/create',
      reset: 'opportunityStatus/reset'
    }),
    onSendForm() {
      this.create()
        .then(item => {
          this.$router.push({
            name: 'ProjectStatusShow',
            params: { id: item.id }
          })
        })
        .catch()
    }
  }
}
</script>
