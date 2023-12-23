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
                      <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                  </div>
                </div>
                <!-- PAGE-HEADER END -->
                {{-- Start Input --}}
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                SoundBank
                            </div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-solid-danger alert-dismissible fade show">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"><i class="bi bi-x"></i></button>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                    class="bi bi-x"></i></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="col">
                              <form action="{{ route('soundbank.update', $soundBank->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-lg-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $soundBank->title }}">
                                </div>
                            
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-lg-12 mb-3">
                                    <label for="singer" class="form-label">Singer</label>
                                    <input type="text" class="form-control" id="singer" name="singer" placeholder="Singer" value="{{ $soundBank->singer }}">
                                </div>
                            
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-lg-12 mb-3">
                                    <label for="formFile" class="form-label">Music</label>
                                    <input class="form-control" type="file" id="formFile" name="file_mp3">
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                                {{-- End Input --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::app-content -->

    <!-- Cleave.js -->
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>

    <!-- Input Mask JS -->
    <script src="{{asset('backend')}}/dist/assets/js/form-input-mask.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var t2 = new Cleave('.time-format-2', {
            time: true,
            timePattern: ['h', 'm']
        });
    });
</script>
@endsection
