<template>
  <is-show-template
    :fields="fields"
    entity="OpportunityStatus"
    :history-key="historyKey"
  />
</template>

<script>
export default {
  data() {
    return {
      historyKey: 1,
      fields: [
        {
          property: 'name',
          type: 'string'
        }
      ]
    }
  }
}
</script>
