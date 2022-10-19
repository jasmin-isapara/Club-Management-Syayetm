import { createStore } from 'vuex';

import errors from './modules/Utils/Errors'
import employees from './modules/Employees'

export default createStore({
    modules: {
        errors,
        employees
    }
})
