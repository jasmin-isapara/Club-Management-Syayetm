<template>
<Head title="Dashboard" />

<BreezeAuthenticatedLayout>
    <!-- {{ employee }}
        this is employee demo -->

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 max-w-xs">
                <input type="search" name="" id="" aria-label="Search" class="blog w-full rounded-md border-gray-300" placeholder="search.....">
            </div>

            <table class="table">
                <thead class="table-dark">
                    <th>Sr No.</th>
                </thead>
                <tbody>
                    ...
                </tbody>
            </table>
        </div>
    </div>

</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import {
    Head
} from "@inertiajs/inertia-vue3";

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },

    props: {
        employee: Object,
    },
};
</script>
