@extends('admin.admin_dashboard')
<!-- Start::app-content -->
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Edit Invitation </h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('invitation.index') }}">Invitation </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Invitation </li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            {{-- START INPUT --}}
            <form action="{{ route('invitation.update', $invitation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Edit Invitation
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-solid-danger alert-dismissible fade show">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                            class="bi bi-x"></i></button>
                                </div>
                            @endif

                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <label for="theme_id" class="form-label">Theme</label>
                                    <select class="form-select" id="theme_id" name="theme_id" required>
                                        <option value="">Select Theme</option>
                                        @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}"
                                                {{ $invitation->theme_id == $theme->id ? 'selected' : '' }}>
                                                {{ $theme->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code"
                                        value="{{ $invitation->code }}" disabled>
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <img id="image_preview" src="{{ $invitation->image_url }}" class="img-fluid rounded"
                                    alt="Preview" style="max-width: 250px; max-height: 200px;">
                            </div>

                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <label for="soundbank_id" class="form-label">Soundbank</label>
                                    <select class="form-select" id="soundbank_id" name="soundbank_id" required>
                                        <option value="">Select Sound</option>
                                        @foreach ($soundbanks as $soundbank)
                                            <option value="{{ $soundbank->id }}"
                                                {{ $invitation->soundbank_id == $soundbank->id ? 'selected' : '' }}>
                                                {{ $soundbank->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <audio controls>
                                        <source src="{{ $invitation->audio_url }}" type="audio/mp3">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="title_invitation" class="form-label">Title Invitation</label>
                                <input type="text" class="form-control" id="title_invitation" name="title_invitation"
                                    value="{{ $invitation->title_invitation }}" required
                                    placeholder="Enter Title Invitation">
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Name of the Groom</label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        placeholder="Enter Name of the Groom" value="{{ $invitation->name }}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="name2" class="form-label">Name of the Bride</label>
                                    <input type="text" class="form-control" id="name2" name="name2" required
                                        placeholder="Enter Name of the Bride" value="{{ $invitation->name2 }}">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="wali_name" class="form-label">Bride's guardian</label>
                                    <input type="text" class="form-control" id="wali_name" name="wali_name" required
                                        placeholder="Enter Bride's Guardian" value="{{ $invitation->wali_name }}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="wali_name2" class="form-label">Groom's guardian</label>
                                    <input type="text" class="form-control" id="wali_name2" name="wali_name2"
                                        required placeholder="Enter Groom's Guardian"
                                        value="{{ $invitation->wali_name2 }}">
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="url" class="form-label">Url</label>
                                <input type="text" class="form-control" id="url" name="url"
                                    value="{{ $invitation->url }}" required placeholder="Enter URL">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="description" name="description" required
                                    placeholder="Enter Description">{{ $invitation->description }}</textarea>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <label for="date_invitation" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date_invitation"
                                        name="date_invitation" value="{{ $invitation->date_invitation }}" required
                                        placeholder="Select Date">
                                </div>
                                <div class="col-sm-4">
                                    <label for="time_invitation" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="time_invitation"
                                        name="time_invitation" value="{{ $invitation->time_invitation }}" required
                                        placeholder="Select Time">
                                </div>
                                <div class="col-sm-4">
                                    <label for="timezone" class="form-label">Timezone</label>
                                    <input type="text" class="form-control" id="timezone" name="timezone"
                                        value="{{ $invitation->timezone }}" required placeholder="Enter Timezone">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="no_rekening" class="form-label">No Rekening</label>
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening"
                                        required placeholder="000xxx" value="{{ $invitation->no_rekening }}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="name_rekening" class="form-label">Name Rekening</label>
                                    <input type="text" class="form-control" id="name_rekening" name="name_rekening"
                                        required placeholder="Ex. An....." value="{{ $invitation->name_rekening }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address_invitation" class="form-label">Address</label>
                                <textarea type="text" class="form-control mb-3" id="address_invitation" name="address_invitation" required
                                    placeholder="Enter Address">{{ $invitation->address_invitation }}</textarea>
                                <input type="text" class="form-control mb-3" id="address_url" name="address_url"
                                    value="{{ $invitation->address_url }}" required placeholder="Enter Address URL">
                                <textarea type="text" class="form-control mb-3" id="address_maps" name="address_maps" required
                                    placeholder="Enter Address on Maps">{{ $invitation->address_maps }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            {{-- End INPUT --}}
        </div>
    </div>
    <!-- End::app-content -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeSelect = document.getElementById('theme_id');
            const codeInput = document.getElementById('code');
            const imagePreview = document.getElementById('image_preview');
            const soundbankSelect = document.getElementById('soundbank_id');
            const audioPreview = document.querySelector('audio');

            // Function to update theme data
            function updateThemeData() {
                const selectedThemeId = themeSelect.value;

                fetch(`/get-theme/${selectedThemeId}`)
                    .then(response => response.json())
                    .then(data => {
                        codeInput.value = data.code;
                        if (data.background_img) {
                            imagePreview.src = `${data.background_img}`;
                        } else {
                            console.log('No image found in response.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            // Function to update soundbank data
            function updateSoundbankData() {
                const selectedSoundbankId = soundbankSelect.value;

                fetch(`/get-soundbank/${selectedSoundbankId}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.audio_src) {
                            audioPreview.src = `/${data.audio_src}`;
                        } else {
                            console.log('No audio found in response.');
                            audioPreview.src = '';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            // Initial update of theme and soundbank data
            updateThemeData();
            updateSoundbankData();

            // Event listeners for theme and soundbank changes
            themeSelect.addEventListener('change', updateThemeData);
            soundbankSelect.addEventListener('change', updateSoundbankData);
        });
    </script>

@endsection
