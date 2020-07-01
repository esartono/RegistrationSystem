<h2 class="card-title">Form Data Pribadi</h2>
<p class="card-text pb-3">Untuk melanjutkan ke tahap berikutnya silahkan isi form di bawah ini.</p>
<form action="{{url('user', [auth()->user()])}}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf
<div class="p-3 bg-secondary" style="border: 1px solid; border-radius: 8px; ">
    <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label">{{ __('Full Name') }}</label>
        <div class="col-sm-8">
            <input name="name" type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" readonly>
            <input name="step" type="hidden" class="form-control" id="name" value="1" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="npm" class="col-sm-4 col-form-label">{{ __('NPM') }}</label>
        <div class="col-sm-8">
            <input name="npm" type="text" class="form-control" value="{{ $user->npm ?? '' }}"  id="npm" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="faculty" class="col-sm-4 col-form-label">{{ __('Faculty') }}</label>
        <div class="col-sm-8">
            <input name="faculty" type="text" class="form-control" value="{{ $user->faculty ?? '' }}"  id="faculty" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-4 col-form-label">{{ __('Address') }}</label>
        <div class="col-sm-8">
            <input name="address" type="text" class="form-control" value="{{ $user->address ?? '' }}"  id="address" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-4 col-form-label">{{ __('Phone') }}</label>
        <div class="col-sm-8">
            <input name="phone" type="text" class="form-control" value="{{ $user->phone ?? '' }}"  id="phone" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="file" class="col-sm-4 col-form-label">{{ __('Upload ID Card') }}</label>
        <div class="col-sm-8">
            <div class="custom-file">
                <input name="file" type="file" class="custom-file-input" id="file" lang="en" required>
                <label class="custom-file-label" for="file">Select file</label>
            </div>
        </div>
    </div>
    <button type="submit" class="offset-md-4 col-sm-8 btn btn-primary">Submit</button>
</div>
</form>
