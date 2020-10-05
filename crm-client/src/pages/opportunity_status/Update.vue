<template>
  <is-main-template
    title="opportunity_status_edit"
    :title-params="{ entity: item && item.name }"
  >
    <opportunity-status-form :handle-submit="onSendForm" :item="item" />
  </is-main-template>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import OpportunityStatusForm from './Form'

export default {
  components: {
    OpportunityStatusForm,
  },
  computed: {
    ...mapGetters({
      item: 'opportunityStatus/item',
    }),
  },
  created() {
    this.getItem(this.$route.params.id)
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      getItem: 'projectStatus/getItem',
      update: 'projectStatus/update',
      reset: 'projectStatus/reset'
    }),
    onSendForm() {
      this.update()
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
