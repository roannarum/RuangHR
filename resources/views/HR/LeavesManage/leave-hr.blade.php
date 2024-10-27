@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Leave Manage (HR)</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Leaves Manage</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Leave Manage (HR)
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center rounded-md size-12 text-15 bg-custom-100 text-custom-500 dark:bg-custom-500/20 shrink-0"><i data-lucide="file-bar-chart-2"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="18">0</span>/<span class="counter-value" data-target="60">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Today/Presents Leave</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center text-green-500 bg-green-100 rounded-md size-12 text-15 dark:bg-green-500/20 shrink-0"><i data-lucide="calendar-check"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="5">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Today Leaves</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center text-purple-500 bg-purple-100 rounded-md size-12 text-15 dark:bg-purple-500/20 shrink-0"><i data-lucide="codepen"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="0">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Unplanned Leaves</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center text-yellow-500 bg-yellow-100 rounded-md size-12 text-15 dark:bg-yellow-500/20 shrink-0"><i data-lucide="loader"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="6">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Pending Leaves</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
            <div class="card">
                <div class="card-body">
                    <div class="grid grid-cols-1 gap-4 mb-5 lg:grid-cols-2 xl:grid-cols-12">
                        <h6 class="text-15 grow">Leave</h6>
                        <div class="xl:col-span-2 xl:col-start-11">
                            <div class="ltr:lg:text-right rtl:lg:text-left">
                                <a href="{{ route('hr/create/leave/hr/page') }}" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                    <i data-lucide="plus" class="inline-block size-4"></i> 
                                    <span class="align-middle">Add Leave</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <table id="alternativePagination" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">No</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Employee Name</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Leave Type</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Reason</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">No Of Days</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">From</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">to</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Status</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Willie Torres</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Medical Leave</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Hospital</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">11 Oct, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">12 Oct, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex gap-2">
                                        <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                        <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                        <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Patricia Garcia</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Family Function</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07 Sept, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07 Sept, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-yellow-100 text-yellow-500 dark:bg-yellow-400/20 dark:border-transparent">Pending</span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex gap-2">
                                        <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                        <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                        <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">03</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Juliette Fecteau</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Holiday</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">06</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">11 Jun, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">16 Jun, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-purple-100 border-purple-100 text-purple-500 dark:bg-purple-400/20 dark:border-transparent">New</span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex gap-2">
                                        <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                        <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                        <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">04</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Thomas Hatfield</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Attend Birthday party</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 July, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 July, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex gap-2">
                                        <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                        <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                        <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">05</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Willie Torres</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Personal</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">19 Aug, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">20 Aug, 2023</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-red-100 text-red-500 dark:bg-red-400/20 dark:border-transparent">Declined</span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex gap-2">
                                        <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                        <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                        <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@section('script')
@endsection
@endsection
