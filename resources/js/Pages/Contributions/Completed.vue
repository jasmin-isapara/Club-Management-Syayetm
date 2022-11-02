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
                                    <tr v-for="emp in completedContributions" :key="emp.id">
                                        <td>{{emp.employee_id}}</td>
                                        <td>{{emp.first_name}} {{emp.last_name}}</td>
                                        <td>{{emp.email}}</td>
                                        <td>
                                            <BreezeNavLink :href="route('employee.show', emp.id)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </span>
                                            </BreezeNavLink>
                                            <button v-if="emp.status==1" @click="DeleteEmployee(emp.id)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" data-kt-customer-table-filter="delete_row">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                    </svg>
                                                </span>
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
    props: ["completedContributions"],
    data() {
        return {
            search: "",
            isSearch: false,
            message: 'No Data Found',
        }
    },

    components: {
        BreezeAuthenticatedLayout,
        BreezeNavLink,
        Header
    }
}
</script>
