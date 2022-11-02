<template>
<Head title="Contributions" />

<div class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0" data-kt-table-widget-3="tabs_nav">
    <BreezeNavLink :href="route('incomes.index')" :active="route().current('incomes.index')" class="text-gray-600 text-lg text-hover-primary fs-4 fw-bolder pb-3 border-bottom cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Show All">Contribution History</BreezeNavLink>
    <BreezeNavLink :href="route('incomes.pending')" :active="route().current('incomes.pending')" class="text-gray-600 text-lg text-hover-primary fs-4 fw-bolder pb-3 border-bottom cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending">Pending Contribution</BreezeNavLink>
    <BreezeNavLink :href="route('incomes.complete')" :active="route().current('incomes.complete')" class="text-gray-600 text-lg text-hover-primary fs-4 fw-bolder pb-3 border-bottom cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Completed">Completed Contribution</BreezeNavLink>
</div>
<div class="card-toolbar">
    <div class="d-flex align-items-center position-relative my-1">
        <span class="svg-icon svg-icon-1 position-absolute ms-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
            </svg>
        </span>
        <input type="text" data-kt-customer-table-filter="search" v-model="search" @keyup="searchEmployee(search)" class="form-control form-control-solid w-250px ps-15" placeholder="Search" />
    </div>
</div>
</template>

<script>
import BreezeNavLink from "@/Components/NavLink.vue";
import {
    Head
} from '@inertiajs/inertia-vue3';
export default {
    components: {
        BreezeNavLink,
        Head,
    },
}
</script>
