        @extends('admin.admin_dashboard')
            <!-- Start::app-content -->
            @section('content')
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <h1 class="page-title my-auto">Invitation </h1>
                        <div>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Invitation </a>
                                </li>
                                <li
                                    class="breadcrumb-item active"
                                    aria-current="page"
                                >Invitation </li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->
                     @if (session('success'))
                <div class="alert alert-solid-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                 @endif
                    {{-- Start Table --}}
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Data Invitation 
                                </div>
                                <div class="prism-toggle">
                                    {{-- <a
                                        href="{{ route('Invitation .create') }}"
                                        class="btn btn-sm btn-primary-light"
                                    >Add Sound <i class="ri-soundcloud-line"></i></a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('invitation.store') }}" method="post">
                                @csrf
                                                        
                                <div class="mb-3">
                                    <label for="theme_id" class="form-label">Theme ID</label>
                                    <input type="text" class="form-control" id="theme_id" name="theme_id" required placeholder="Enter Theme ID">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="title_invitation" class="form-label">Title Invitation</label>
                                    <input type="text" class="form-control" id="title_invitation" name="title_invitation" required placeholder="Enter Title Invitation">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Name">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="url" class="form-label">Url</label>
                                    <input type="text" class="form-control" id="url" name="url" required placeholder="Enter URL">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea type="text" class="form-control" id="description" name="description" required placeholder="Enter Description"></textarea>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date_invitation" name="date_invitation" required placeholder="Select Date">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="time" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="time_invitation" name="time_invitation" required placeholder="Select Time">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="address_invitation" class="form-label">Address</label>
                                    <textarea type="text" class="form-control mb-3" id="address_invitation" name="address_invitation" required placeholder="Enter Address"></textarea>
                                    <input type="text" class="form-control mb-3" id="address_url" name="address_url" required placeholder="Enter Address URL">
                                    <textarea type="text" class="form-control mb-3" id="address_maps" name="address_maps" required placeholder="Enter Address on Maps"></textarea>
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            </div>
                        </div>
                    </div>
                    {{-- End Table --}}
                </div>
            </div>
            <!-- End::app-content -->

        <script>
        function confirmDelete(themeId) {
            if (confirm("Are you sure you want to delete this theme?")) {
                document.getElementById('delete-form-' + themeId).submit();
            }
        }
        </script>
        
        @endsection
