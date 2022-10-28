<template>
<Head title="Employees" />

<BreezeAuthenticatedLayout>
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Employee Details</h3>
            </div>
        </div>
        <div id="kt_account_settings_profile_details" class="collapse show">
            <form id="kt_account_profile_details_form" class="form">
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Employee Id</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-control form-control-lg form-control-solid">{{employee.employee_id}}</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Full Name</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-control form-control-lg form-control-solid">{{employee.full_name}}</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Email Address</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-control form-control-lg form-control-solid">{{employee.email}}</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            Phone
                        </label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-control form-control-lg form-control-solid">{{employee.mobile}}</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Gender</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-control form-control-lg form-control-solid">{{employee.gender}}</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Status</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-control form-control-lg form-control-solid" v-if="employee.status == 1">Active</div>
                            <div class="form-control form-control-lg form-control-solid" v-else>Inactive</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Created_at</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-control form-control-lg form-control-solid">
                                <!-- {{ format_Date(employee.created_at)}} -->
                                {{employee.created_at}}
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch fv-row">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center py-6 px-9">
                    <BreezeNavLink :href="route('employee.index')" class="btn btn-dark btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 w-50">Back</BreezeNavLink>
                </div>
            </form>
        </div>
    </div>
</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import BreezeNavLink from "@/Components/NavLink.vue";
import {
    Head
} from '@inertiajs/inertia-vue3';
import moment from "moment";

export default {
    props: ["employee"],

    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeNavLink,
    },

    format_Date(value) {
        if (value) {
            return moment(String(value)).format('DD-MM-YYYY')
        }
    },
}
</script>
