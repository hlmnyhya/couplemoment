@extends('admin.admin_dashboard')

@section('content')

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title my-auto">Invoice List</h1>
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Invoice</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->


        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Manage Invoices
                        </div>
                        <div class="d-flex">
                            <a href="invoice-create.html" class="btn btn-sm btn-primary btn-wave waves-light"><i class="ri-add-line fw-semibold align-middle me-1"></i> Create Invoice</a>
                            <div class="dropdown ms-2">
                                <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">All Invoices</a></li>
                                    <li><a class="dropdown-item" href="#">Paid Invoices</a></li>
                                    <li><a class="dropdown-item" href="#">Pending Invoices</a></li>
                                    <li><a class="dropdown-item" href="#">Overdue Invoices</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Client</th>
                                        <th scope="col">Invoice ID</th>
                                        <th scope="col">Issued Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/11.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Json Taylor</p>
                                                    <p class="mb-0 fs-11 text-muted">jsontaylor2416@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032901
                                            </a>
                                        </td>
                                        <td>
                                            25,Nov 2022
                                        </td>
                                        <td>
                                            $212.45
                                        </td>
                                        <td>
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td>
                                            25,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/7.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Suzika Stallone</p>
                                                    <p class="mb-0 fs-11 text-muted">suzikastallone3214@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032912
                                            </a>
                                        </td>
                                        <td>
                                            13,Nov 2022
                                        </td>
                                        <td>
                                            $512.99
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-transparent">Pending</span>
                                        </td>
                                        <td>
                                            13,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/15.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Roman Killon</p>
                                                    <p class="mb-0 fs-11 text-muted">romankillon143@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032945
                                            </a>
                                        </td>
                                        <td>
                                            30,Nov 2022
                                        </td>
                                        <td>
                                            $2199.49
                                        </td>
                                        <td>
                                            <span class="badge bg-danger-transparent">Overdue</span>
                                        </td>
                                        <td>
                                            30,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/12.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Charlie Davieson</p>
                                                    <p class="mb-0 fs-11 text-muted">charliedavieson@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032922
                                            </a>
                                        </td>
                                        <td>
                                            18,Nov 2022
                                        </td>
                                        <td>
                                            $1569.99
                                        </td>
                                        <td>
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td>
                                            18,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/4.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Selena Deoyl</p>
                                                    <p class="mb-0 fs-11 text-muted">selenadeoyl114@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032932
                                            </a>
                                        </td>
                                        <td>
                                            18,Nov 2022
                                        </td>
                                        <td>
                                            $4,873.99
                                        </td>
                                        <td>
                                            <span class="badge bg-primary-transparent">Due By 1 Day</span>
                                        </td>
                                        <td>
                                            18,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/7.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Kiara Advensh</p>
                                                    <p class="mb-0 fs-11 text-muted">kiaraadvensh87@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032978
                                            </a>
                                        </td>
                                        <td>
                                            02,Nov 2022
                                        </td>
                                        <td>
                                            $1923.99
                                        </td>
                                        <td>
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td>
                                            18,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/9.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Joseph Samurai</p>
                                                    <p class="mb-0 fs-11 text-muted">josephsamurai@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032919
                                            </a>
                                        </td>
                                        <td>
                                            15,Nov 2022
                                        </td>
                                        <td>
                                            $1,623.99
                                        </td>
                                        <td>
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td>
                                            15,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/13.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Kevin Powell</p>
                                                    <p class="mb-0 fs-11 text-muted">kevinpowell@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032931
                                            </a>
                                        </td>
                                        <td>
                                            21,Nov 2022
                                        </td>
                                        <td>
                                            $3,423.99
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-transparent">Pending</span>
                                        </td>
                                        <td>
                                            21,Dec 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="invoice-list">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('backend') }}/dist/assets/images/faces/8.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Darla Jung</p>
                                                    <p class="mb-0 fs-11 text-muted">darlajung555@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                #SPK12032958
                                            </a>
                                        </td>
                                        <td>
                                            15,Oct 2022
                                        </td>
                                        <td>
                                            $2,982.99
                                        </td>
                                        <td>
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td>
                                            15,Nov 2022
                                        </td>
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0 float-end">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->

    </div>
</div>
@endsection
