import ProjectTypeList from '../pages/project_type/List'
import ProjectTypeCreate from '../pages/project_type/Create'
import ProjectTypeUpdate from '../pages/project_type/Update'
import ProjectTypeShow from '../pages/project_type/Show'

export default [
  {
    name: 'OpportunityTypeList',
    path: '/project_types/',
    component: ProjectTypeList,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityTypeCreate',
    path: '/opportunity_types/create',
    component: ProjectTypeCreate,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityTypeUpdate',
    path: '/opportunity_types/edit/:id',
    component: ProjectTypeUpdate,
    meta: {
      requiresAuth: true
    }
  },
  {
    name: 'OpportunityTypeShow',
    path: '/opportunity_types/show/:id',
    component: ProjectTypeShow,
    meta: {
      requiresAuth: true
    }
  }
]
