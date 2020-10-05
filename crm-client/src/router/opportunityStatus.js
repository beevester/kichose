import OpportunityStatusList from '../pages/opportunity_status/List'
import OpportunityStatusCreate from '../pages/opportunity_status/Create'
import OpportunityStatusUpdate from '../pages/opportunity_status/Update'
import OpportunityStatusShow from '../pages/opportunity_status/Show'

export default [
  {
    name: 'OpportunityStatusList',
    path: '/opportunity_statuses/',
    component: OpportunityStatusList,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityStatusCreate',
    path: '/opportunity_statuses/create',
    component: OpportunityStatusCreate,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityStatusUpdate',
    path: '/opportunity_statuses/edit/:id',
    component: OpportunityStatusUpdate,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityStatusShow',
    path: '/opportunity_statuses/show/:id',
    component: OpportunityStatusShow,
    meta: {
      requiresAuth: true
    }
  }
]
