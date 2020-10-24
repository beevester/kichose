<template>
  <is-main-template
    title="Opportunities_list"
    route-add="OpportunityCreate"
    entity="opportunity"
  >
    <api-table
      entity="Opportunity"
      route="opportunities"
      path="opportunity"
      :filterable="filterable"
      :custom-filters="customFilters"
      :sortable="sortable"
      :columns="columns"
      :templates="templates"
    >
      <template slot="filter__status.id">
        <opportunity-status-filter />
      </template>

      <template slot="filter__type.id">
        <deal-type-filter />
      </template>
    </api-table>
  </is-main-template>
</template>

<script>
import ApiTable from '../../components/ApiTable'
import columnCreatedAt from '../../table/ColumnCreatedAt'
import columnUpdatedAt from '../../table/ColumnUpdatedAt'
import columnStatus from '../../table/ColumnStatus'
import columnType from '../../table/ColumnType'
import OpportunityStatusFilter from '../../components/filters/OpportunityStatusFilter'
import columnIsActive from '../../table/ColumnIsActive'
import DealTypeFilter from '../../components/filters/DealTypeFilter'

export default {
  components: { DealTypeFilter, OpportunityStatusFilter, ApiTable },
  data() {
    return {
      columns: [
        'id',
        'opportunity',
        'company.name',
        'client.name',
        'priority',
        'status.id',
        'salesStage',
        'dealValue',
        'probability',
        'dealType',
        'closeDate',
        'actions'
      ],
      filterable: [
        'id',
        'opportunityName',
        'client.name',
        'division',
        'isActive',
        'columnCreatedAt',
        'columnUpdatedAt',
      ],
      customFilters: ['status.id', 'type.id'],
      sortable: [
        'id',
        'name',
        'client.name',
        'status.id',
        'type.id',
        'isActive',
        'columnCreatedAt',
        'columnUpdatedAt',
      ],
      templates: {
        columnCreatedAt,
        columnUpdatedAt,
        'status.id': columnStatus,
        'type.id': columnType,
        isActive: columnIsActive,
      },
    }
  },
}
</script>
