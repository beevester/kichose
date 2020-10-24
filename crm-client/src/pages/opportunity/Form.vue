<template>
  <form @submit.prevent="handleSubmit(item)">
    <section class="content">
      <item-errors entity="opportunity" />
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">
            {{ $t('tabs_general') }}
          </h3>
        </div>
        <div class="box-body">
          <form-input
            :item="item"
            :errors="errors"
            property="opportunity"
            label="Opportunity Name"
            @formUpdated="updateValue"
          />
          <form-input
            :item="item"
            :errors="errors"
            property="description"
            label="description"
            @formUpdated="updateValue"
          />
          <form-select-autocomplete
            :item="item"
            :errors="errors"
            property="type"
            option-store="dealType"
            label="type_name"
            @formUpdated="updateValue"
          />
          <form-number
            :item="item"
            :errors="errors"
            type="number"
            property="dealValue"
            label="Deal Value"
            @formUpdated="updateValue"
          />
          <form-select-autocomplete
            :item="item"
            :errors="errors"
            property="status"
            option-store="opportunityStatus"
            label="status_name"
            @formUpdated="updateValue"
          />
          <form-number
            :item="item"
            :errors="errors"
            property="priority"
            label="Priority"
            @formUpdated="updateValue"
          />
          <form-number
            :item="item"
            :errors="errors"
            property="probability"
            label="Probability"
            @formUpdated="updateValue"
          />
          <form-select-autocomplete
            :item="item"
            :errors="errors"
            property="client"
            option-store="client"
            label="client_name"
            @formUpdated="updateValue"
          />
          <form-select-autocomplete
            :item="item"
            :errors="errors"
            property="assignedTo"
            option-store="user"
            label="Assigned To"
            @formUpdated="updateValue"
          />
          <form-select-autocomplete
            :item="item"
            :errors="errors"
            property="company"
            option-store="company"
            label="company_name"
            @formUpdated="updateValue"
          />
          <form-checkbox
            :item="item"
            :errors="errors"
            property="isActive"
            label="isActive"
            @formUpdated="updateValue"
          />
        </div>
      </div>
      <item-edit-actions :item="item" entity="Opportunity" path="opportunity" />
    </section>
  </form>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import ItemEditActions from '../../components/layout/ItemEditActions'
import ItemErrors from '../../components/layout/errors/ItemErrors'
import TaskForm from '../../pages/task/Form'

export default {
  components: {
    ItemErrors,
    ItemEditActions,
  },
  props: {
    handleSubmit: {
      type: Function,
      required: true,
    },
    item: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      setTask: false,
    }
  },
  computed: {
    ...mapGetters({
      errors: 'opportunity/errors',
    }),
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      reset: 'opportunity/reset',
    }),
    updateValue(property, value) {
      this.$store.commit('opportunity/OPPORTUNITY_UPDATE_ITEM', {
        [property]: value,
      })
    },
  },
}
</script>
