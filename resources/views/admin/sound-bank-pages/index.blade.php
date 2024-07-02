@extends('admin.admin_dashboard')
<!-- Start::app-content -->
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">SoundBank</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">SoundBank</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">SoundBank</li>
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
                            Data SoundBank
                        </div>
                        <div class="prism-toggle">
                            <a href="{{ route('soundbank.create') }}" class="btn btn-sm btn-primary-light">Add Sound <i
                                    class="ri-soundcloud-line"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Singer</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">File MP3</th>
                                        <th scope="col">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($soundBanks as $soundBank)
                                        <tr>
                                            <td>{{ $soundBank->title }}</td>
                                            <td>{{ $soundBank->singer }}</td>
                                            <td>{{ $soundBank->duration }}</td>
                                            <td>
                                                <audio controls>
                                                    <source src="{{ asset($soundBank->file_mp3) }}" type="audio/mp3">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="SoundBank Actions">
                                                    <a href="{{ route('soundbank.edit', $soundBank->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="ri-edit-2-line"></i>
                                                    </a> |
                                                    <form action="{{ route('soundbank.destroy', $soundBank->id) }}"
                                                        method="POST" id="delete-form-{{ $soundBank->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            onclick="confirmDelete({{ $soundBank->id }})">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
