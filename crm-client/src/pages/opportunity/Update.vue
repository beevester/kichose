<template>
  <is-main-template
    title="Opportunity Edit"
    :title-params="{ entity: item && item.name }"
  >
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
  created() {
    this.getItem(this.$route.params.id)
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      getItem: 'opportunity/getItem',
      update: 'opportunity/update',
      reset: 'opportunity/reset'
    }),
    onSendForm() {
      this.update()
        .then(item => {
          this.$router.push({ name: 'OpportunityShow', params: { id: item.id } })
        })
        .catch()
    }
  }
}
</script>
