import * as mutations from '../../mutation-types'

export default {
    [mutations.SET_EMPLOYEES](state, payload) {
        state.employees = payload
    }
}
