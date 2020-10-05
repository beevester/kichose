<template>
  <is-main-template title="Add Opportunity">
    <opportunity-form :handle-submit="onSendForm" :item="item" />
  </is-main-template>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import OpportunityForm from './Form'

export default {
  components: {
    OpportunityForm
  },
  computed: {
    ...mapGetters({
      item: 'opportunity/item'
    })
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      create: 'opportunity/create',
      reset: 'opportunity/reset'
    }),
    onSendForm() {
      this.create()
        .then(item => {
          this.$router.push({ name: 'OpportunityShow', params: { id: item.id } })
        })
        .catch()
    }
  }
}
</script>
