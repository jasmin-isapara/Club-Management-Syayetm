<template>
<BreezeAuthenticatedLayout>
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
</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
export default {
    props: ["pendingContributions", "completedContributions"],
    data() {
        return {
            search: "",
            isSearch: false,
            message: 'No Data Found',
        }
    },

    components: {
        BreezeAuthenticatedLayout,
        BreezeNavLink
    }
}
</script>
