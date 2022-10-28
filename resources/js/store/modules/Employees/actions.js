import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import axios from 'axios'
import { Inertia } from '@inertiajs/inertia'

export default {
    // [actions.ADD_EMPLOYEES]({ commit }, payload) {
    //     axios.post('employee', payload)
    //         .then(res => {
    //             if (res.data.success == true) {
    //                 console.log(res.data);
    //                 localStorage.removeItem();
    //                 // console.log(res.data.success);
    //                 $(".modal").modal('hide');
    //                 Inertia.reload({
    //                     only: ['employees']
    //                 })
    //             }
    //         })
    //         .catch(err => {
    //             commit(mutations.SET_ERRORS, err.response.data.errors)
    //             localStorage.setItem('error', JSON.stringify(err.response.data.errors))
    //             // console.log(err.response.data.errors);
    //         })
    // },

    // [actions.GET_EMPLOYEES]({ commit }) {
    //     axios.get('/api/employees')
    //         .then(res => {
    //             if (res.data.success == true) {
    //                 commit(mutations.SET_EMPLOYEES, res.data.data)
    //             }
    //         })
    //         .catch(err => {
    //             console.log(err.response);
    //         })
    // },

    // [actions.EDIT_EMPLOYEES]({ commit }, payload) {
    //     axios.post(`/employee/${payload.id}`, payload.data)
    //         .then(res => {
    //             console.log(res);
    //             if (res.data.success == true) {
    //                 // window.location.href = '/employee'
    //                 console.log(res.data.success);
    //                 $(".modal").modal('hide');
    //                 Inertia.reload({
    //                     only: ['employees']
    //                 })
    //             }
    //         })
    //         .catch(err => {
    //             commit(mutations.SET_ERRORS, err.response.data.errors)
    //             console.log(err.response.data.errors);
    //         })
    // },

    // [actions.RE_ACTIVE_EMPLOYEE]({commit}, payload) {
        // axios.post(`api/employees/${payload.id}`, payload.data)
        // .then(res => {
        //     if (res.data.success == true) {
        //         console.log(res.data.success);
        //         Inertia.reload({
        //             only: ['employees']
        //         })
        //     }
        // })
        // .catch(err => {
        //     commit(mutations.SET_ERRORS, err.response.data.errors)
        //     console.log(err.response.data.errors);
        // })
    // }

}

