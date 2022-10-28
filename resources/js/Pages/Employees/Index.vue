<template>
<Head title="Employees" />

<BreezeAuthenticatedLayout>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search" v-model="search" @keyup="searchEmployee(search)" class="form-control form-control-solid w-250px ps-15" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Filter
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-4 text-dark fw-bolder">
                                        Filter Options
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fs-5 fw-bold mb-3">Month:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter">
                                            <option></option>
                                            <option value="aug">
                                                August
                                            </option>
                                            <option value="sep">
                                                September
                                            </option>
                                            <option value="oct">
                                                October
                                            </option>
                                            <option value="nov">
                                                November
                                            </option>
                                            <option value="dec">
                                                December
                                            </option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fs-5 fw-bold mb-3">Payment Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex flex-column flex-wrap fw-bold" data-kt-customer-table-filter="payment_type">
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked" />
                                                <span class="form-check-label text-gray-600">All</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="payment_type" value="visa" />
                                                <span class="form-check-label text-gray-600">Visa</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                <input class="form-check-input" type="radio" name="payment_type" value="mastercard" />
                                                <span class="form-check-label text-gray-600">Mastercard</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="payment_type" value="american_express" />
                                                <span class="form-check-label text-gray-600">American Express</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">
                                            Apply
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Filter-->
                            <!--begin::Export-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                        <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
                                        <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Export
                            </button>
                            <!--end::Export-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-primary" @click="openEmployeeModal()">
                                Add Employee
                            </button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">
                                Delete Selected
                            </button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Employee ID</th>
                                <th class="min-w-125px">Employee Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Created Date</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600" v-if="employees.length > 0 && isSearch == false">
                            <tr v-for="emp in employees" :key="emp.id">
                                <td>
                                    <a :href="route('employee.show', emp.id)" class="text-gray-600 text-hover-primary mb-1">
                                        {{emp.employee_id}}
                                    </a>
                                </td>
                                <td>
                                    <a :href="route('employee.show', emp.id)" class="text-gray-800 text-hover-primary mb-1">{{ emp.full_name }}</a>
                                    <!-- <a href="../../demo1/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a> -->
                                </td>
                                <td>
                                    <a :href="route('employee.show', emp.id)" class="text-gray-600 text-hover-primary mb-1">
                                        {{ emp.email }}
                                    </a>
                                </td>
                                <td>
                                    <div class="text-gray-600 text-hover-primary mb-1">
                                        {{ format_Date(emp.created_at) }}
                                    </div>
                                </td>
                                <!--begin::Action=-->

                                <td class="text-end">
                                    <buttton v-if="emp.status==0" @click="reActiveEmployee(emp.id)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <!-- <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" /> -->
                                                <path opacity="3.5" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </buttton>
                                    <BreezeNavLink :href="route('employee.show', emp.id)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>
                                        </span>
                                    </BreezeNavLink>
                                    <button type="button" v-if="emp.status==1" @click="editEmployee(emp.id)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </button>
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
                                <!--end::Action=-->
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <td colspan="5">{{ message}}</td>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Customers - Add-->
            <div class="modal fade employeeModal" id="employeeModal" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form @submit.prevent="AddEmployee">
                            <!--begin::Modal header-->

                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">{{ modalTitle }}</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="add_customer_close_btn" @click="modalClose()" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                    <input type="hidden" name="id" id="id" v-model="form.id">
                                    <div class="form-group">
                                        <label class="required fs-6 fw-bold mb-2" for="employee_id">Employee Id</label>
                                        <input type="text" v-model="form.employeeId" class="form-control bg-secondary" id="employee_id" placeholder="Ex. 1235" name="employee_id" />
                                        <span class="text-danger">
                                            {{ errors.employeeId }}
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="required fs-6 fw-bold mb-2" for="first_name">First Name</label>
                                        <input type="text" v-model="form.firstName" class="form-control bg-secondary" placeholder="John" name="first_name" id="first_name" />
                                        <span class="text-danger">
                                            {{ errors.firstName }}
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="required fs-6 fw-bold mb-2" for="last_name">Last Name</label>
                                        <input type="text" v-model="form.lastName" class="form-control bg-secondary" placeholder="Dao" name="last_name" id="last_name" />
                                        <span class="text-danger">
                                            {{ errors.lastName }}
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-6 fw-bold mb-2" for="email">
                                            <span class="required">Email</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
                                        </label>
                                        <input type="email" v-model="form.email" class="form-control bg-secondary" placeholder="john.dao@gmail.com" name="email" id="email" />
                                        <span class="text-danger">
                                            {{ errors.email }}
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="required fs-6 fw-bold mb-2" for="mobile">Mobile Number</label>
                                        <input type="text" v-model="form.mobile" class="form-control bg-secondary" placeholder="Ex. 9871000033" name="mobile" id="mobile" />
                                        <span class="text-danger">
                                            {{ errors.mobile }}
                                        </span>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <div class="fv-row mb-15">
                                            <label class="required fs-6 fw-bold mb-2" for="gender">Gender</label>
                                        </div>
                                        <input class="form-check-input" type="radio" value="male" name="gender" id="male" v-model="form.gender" />
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>

                                        <input class="form-check-input" type="radio" value="female" name="gender" id="female" v-model="form.gender" />
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                        <span class="form-group text-danger">
                                            {{ errors.gender }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" @click="modalClose()" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">
                                    Discard
                                </button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Customers - Add-->
            <!--begin::Modal - Adjust Balance-->
            <div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Export Customers</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_customers_export_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Select Export Format:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
                                        <option value="excell">
                                            Excel
                                        </option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Select Date Range:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row fv-row mb-15">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Payment Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Radio group-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">All</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">Visa</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="3" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">Mastercard</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="4" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">American Express</span>
                                        </label>
                                        <!--end::Radio button-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_customers_export_cancel" class="btn btn-light me-3">
                                        Discard
                                    </button>
                                    <button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
</BreezeAuthenticatedLayout>
</template>

<script>
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import {
    Head, Link
} from "@inertiajs/inertia-vue3";
import store from "../../store";
import * as actions from "../../store/action-types";
import {
    mapGetters
} from "vuex";
import ShowErrors from "../Utils/ShowError.vue";
import axios from "axios";
import {
    Inertia
} from '@inertiajs/inertia'
import moment from "moment";

export default {
    props: ["employees"],

    data() {
        const form = {
            id: "",
            employeeId: "",
            firstName: "",
            lastName: "",
            email: "",
            mobile: "",
            gender: "",
        };
        const isUpdate = false;
        return {
            form,
            search: "",
            isUpdate,
            modalTitle: "Add Employee",
            employee: this.employees,
            employeeClone: this.employees,
            errors: [],
            isSearch:false,
            message:'No Data Found',
        };
    },

    components: {
        BreezeAuthenticatedLayout,
        Head,
        ShowErrors,
        BreezeNavLink
    },

    computed: {
        ...mapGetters({
            employees: "getEmployees",
            // errors:"getErrors",
        }),
    },

    methods: {
        resetFormData() {
            this.form = {
                id: "",
                employeeId: "",
                firstName: "",
                lastName: "",
                email: "",
                mobile: "",
                gender: "",
            };
        },

        format_Date(value) {
            if (value) {
                return moment(String(value)).format('DD-MM-YYYY')
            }
        },

        editEmployee(id) {
            this.isUpdate = true;
            this.modalTitle = "Update Employee";
            this.openEmployeeModal();
            let editEmp = this.employees.filter(function (emp) {
                return emp.id == id;
            });
            if (editEmp.length == 1 && editEmp[0] != undefined) {
                editEmp = editEmp[0];
                this.form.id = editEmp['id'];
                this.form.employeeId = editEmp['employee_id']
                this.form.firstName = editEmp['first_name']
                this.form.lastName = editEmp['last_name']
                this.form.email = editEmp['email']
                this.form.mobile = editEmp['mobile']
                this.form.gender = editEmp['gender']
            }
        },
        openEmployeeModal() {
            $('.employeeModal').modal({
                backdrop: 'static',
                keyboard: false
            });
            $(".employeeModal").modal('show');
        },
        modalClose() {
            $(".employeeModal").modal('hide');
            this.resetFormData();
            this.errors = [];
            this.isUpdate = false;
            this.modalTitle = "Add Employee";
        },
        AddEmployee() {
            if (!this.isUpdate) {
                let data = new FormData();
                data.append("employeeId", this.form.employeeId);
                data.append("firstName", this.form.firstName);
                data.append("lastName", this.form.lastName);
                data.append("email", this.form.email);
                data.append("mobile", this.form.mobile);
                data.append("gender", this.form.gender);

                axios.post('employee', data)
                    .then(res => {
                        if (res.data.success == true) {
                            this.modalClose();
                            Inertia.reload({
                                only: ['employees']
                            })
                        }
                    })
                    .catch(err => {
                        let errors = err.response.data.errors;
                        this.errors = errors;
                    })
            } else {
                let data = new FormData();
                data.append("_method", "PUT");
                data.append("id", this.form.id);
                data.append("employeeId", this.form.employeeId);
                data.append("firstName", this.form.firstName);
                data.append("lastName", this.form.lastName);
                data.append("email", this.form.email);
                data.append("mobile", this.form.mobile);
                data.append("gender", this.form.gender);

                axios.post(`/employee/${this.form.id}`, data)
                    .then(res => {
                        console.log(res);
                        if (res.data.success == true) {
                            console.log(res.data.success);
                            this.modalClose();
                            Inertia.reload({
                                only: ['employees']
                            })
                        }
                        this.isUpdate = false;
                        this.modalTitle = "Add Employee";
                    })
                    .catch(err => {
                        let errors = err.response.data.errors;
                        this.errors = errors;
                    })
            }
        },

        async DeleteEmployee(id) {
            let del = await axios.delete("employee/" + id);

            if (del.data.success == true) {
                Inertia.reload({
                    only: ['employees']
                });
            }
            this.$forceUpdate();
        },

        async reActiveEmployee(id) {
            let data = new FormData();
            data.append("_method", "PUT");
            data.append("status", 1);
            data.append("deleted_at", "");

            axios.post(`api/employees/${id}`, data)
                .then(res => {
                    if (res.data.success == true) {
                        console.log(res.data.success);
                        Inertia.reload({
                            only: ['employees']
                        })
                    }
                })
                .catch(err => {
                        let errors = err.response.data.errors;
                        this.errors = errors;
                })
        },

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
                // for (let index = 0; index <= this.employees.length; index++) {
                //     this.employees.pop();
                // }
                data.forEach(element => {
                    this.employees.push(element);
                });
                let $this = this;
                setTimeout(function(){
                    $this.isSearch = false;
                    $this.message = 'No Data Found';
                    $this.$forceUpdate();
                },1000);
            } else {
                Inertia.reload({
                            only: ['employees']
                        })
                this.isSearch = false;
                this.message = 'No Data Found';
            }
        },
    },
};
</script>
