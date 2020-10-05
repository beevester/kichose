import OpportunityCreate from '../pages/opportunity/Create'
import OpportunityUpdate from '../pages/opportunity/Update'
import OpportunityShow from '../pages/opportunity/Show'
import OpportunityList from '../pages/opportunity/List'

export default [
  {
    name: 'OpportunityList',
    path: '/opportunities/',
    component: OpportunityList,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityCreate',
    path: '/opportunities/create',
    component: OpportunityCreate,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityUpdate',
    path: '/opportunities/edit/:id',
    component: OpportunityUpdate,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityShow',
    path: '/opportunities/show/:id',
    component: OpportunityShow,
    meta: {
      requiresAuth: true
    }
  }
]
