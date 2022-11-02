<template>
<BreezeAuthenticatedLayout>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-header">
                        <Header></Header>

                        <div class="card-body pt-3">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px">Employee ID</th>
                                        <th class="min-w-125px">Employee Name</th>
                                        <th class="min-w-125px">Email</th>
                                        <th class="min-w-125px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600" v-if="isSearch == false">
                                    <tr v-for="emp in pendingContributions" :key="emp.id">
                                        <td>{{emp.employee_id}}</td>
                                        <td>{{emp.first_name}} {{emp.last_name}}</td>
                                        <td>{{emp.email}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus"></i>Add Contribution
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody v-else>
                                    <td colspan="5">{{ message}}</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import Header from './Header.vue'
export default {
    props: ["pendingContributions"],
    data() {
        return {
            search: "",
            isSearch: false,
            message: 'No Data Found',
            pending: this.pendingContributions,
            pendingClone: this.pendingContributions,
        }
    },

    components: {
        BreezeAuthenticatedLayout,
        BreezeNavLink,
        Header
    },
}
</script>
