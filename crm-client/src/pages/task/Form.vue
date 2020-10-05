<template>
  <form @submit.prevent="handleSubmit(item)">
    <section class="content">
      <item-errors entity="task" />
      <div class="box box-primary">
        <div class="box-body">
          <form-input
            :item="item"
            :errors="errors"
            property="name"
            label="name"
            @formUpdated="updateValue"
          />
          <form-input
            :item="item"
            :errors="errors"
            property="description"
            label="description"
            @formUpdated="updateValue"
          />
          <form-select
            :item="item"
            :errors="errors"
            property="status"
            option-store="taskStatus"
            label="status_name"
            @formUpdated="updateValue"
          />
          <form-select
            :item="item"
            :errors="errors"
            property="assignee"
            option-store="user"
            label="assignee_name"
            @formUpdated="updateValue"
          />
          <form-date-picker
            :item="item"
            :errors="errors"
            property="deadline"
            label="deadline"
            @formUpdated="updateValue"
          />
          <div v-if="handleSubmit">
            <form-select
              :item="item"
              :errors="errors"
              property="project"
              option-store="project"
              label="project_name"
              @formUpdated="updateValue"
            />
          </div>
          <form-select
            :item="item"
            :errors="errors"
            property="opportunity"
            option-store="opportunity"
            label="Opportunity Name"
            @formUpdated="updateValue"
          />
          <form-number
            :item="item"
            :errors="errors"
            property="timeEstimated"
            label="timeEstimated"
            @formUpdated="updateValue"
          />
          <form-number
            :item="item"
            :errors="errors"
            property="timeSpent"
            label="timeSpent"
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
      <div v-if="handleSubmit">
        <item-edit-actions :item="item" entity="Task" path="task" />
      </div>
    </section>
  </form>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import ItemEditActions from '../../components/layout/ItemEditActions'
import ItemErrors from '../../components/layout/errors/ItemErrors'

export default {
  components: {
    ItemErrors,
    ItemEditActions
  },
  props: {
    handleSubmit: {
      type: Function,
      required: false
    },
    item: {
      type: Object,
      required: true
    }
  },
  computed: {
    ...mapGetters({
      errors: 'task/errors'
    })
  },
  beforeDestroy() {
    this.reset()
  },
  methods: {
    ...mapActions({
      reset: 'task/reset'
    }),
    updateValue(property, value) {
      this.$store.commit('task/TASK_UPDATE_ITEM', { [property]: value })
    }
  }
}
</script>
