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
                                    <tr>
                                        <td>1242</td>
                                        <td>abc xyz</td>
                                        <td>emaildummy</td>
                                        <td>not requred</td>
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
import {
    Head
} from '@inertiajs/inertia-vue3';
import axios from "axios";
import {
    Inertia
} from '@inertiajs/inertia'
import Header from './Header.vue'

export default {
    props: ["pendingContributions", "completedContributions"],
    data() {
        return {
            search: "",
            employee: this.employees,
            employeeClone: this.employees,
            isSearch: false,
            message: 'No Data Found',
        }
    },

    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeNavLink,
        Header,
    },

    methods: {
        async searchEmployee(names) {
            if (this.search) {
                this.message = 'Searching...';
                this.isSearch = true;
                let name = names.toLowerCase();
                let empData = Array.from(this.employeeClone);
                let data = empData.filter(function (emp) {
                    return emp.full_name.toLowerCase().includes(name) ||
                        emp.email.toLowerCase().includes(name) ||
                        emp.employee_id.toString().includes(name)
                });

                this.employees.splice(0, this.employees.length)
                data.forEach(element => {
                    this.employees.push(element);
                });
                let $this = this;
                setTimeout(function () {
                    $this.isSearch = false;
                    $this.message = 'No Data Found';
                    $this.$forceUpdate();
                }, 1000);
            } else {
                Inertia.reload({
                    only: ['employees']
                })
                this.isSearch = false;
                this.message = 'No Data Found';
            }
        },
    }
}
</script>
