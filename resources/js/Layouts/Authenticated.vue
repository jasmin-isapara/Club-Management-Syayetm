<template>
<div>
    <div id="kt_body" class="header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="
                --kt-toolbar-height: 55px;
                --kt-toolbar-height-tablet-and-mobile: 55px;
            ">
        <div class="d-flex flex-column flex-root">
            <div class="page d-flex flex-row flex-column-fluid">
                <Sidebar />
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <HeaderContent />
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import {
    Link
} from "@inertiajs/inertia-vue3";
import Sidebar from "./Partials/Sidebar.vue";
import HeaderContent from "./Partials/header.vue";
// import HeaderLinks from './Partials/header-links.vue'

export default {
    components: {
        BreezeApplicationLogo,
        BreezeDropdown,
        BreezeDropdownLink,
        BreezeNavLink,
        BreezeResponsiveNavLink,
        Link,
        Sidebar,
        HeaderContent,
        // HeaderLinks
    },

    data() {
        return {
            showingNavigationDropdown: false,
        };
    },
};
</script>

<style></style>
