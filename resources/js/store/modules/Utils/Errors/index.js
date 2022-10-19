import getters from './getters'
import actions from './actions'
import mutations from './mutatios'

const state = {
    is_errors: false,
    errors: []
}

export default {
    state,
    getters,
    actions,
    mutations
}
