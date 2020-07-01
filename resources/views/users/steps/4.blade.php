<h2 class="card-title">Form Konfirmasi</h2>
<p class="card-text pb-3">Setelah Anda melakukan Ujicoba, silahkan isi form di bawah ini.</p>
<form action="{{url('feedback')}}" method="POST">
@csrf
<div class="p-3 bg-secondary" style="border: 1px solid; border-radius: 8px; ">
    <div class="form-group row">
        <label for="feedback" class="col-sm-4 col-form-label">{{ __('Feedback') }}</label>
        <div class="col-sm-8">
            <div class="custom-control custom-radio mb-3">
                <input type="radio" id="feedback1" name="feedback" value="1" class="custom-control-input">
                <label class="custom-control-label" for="feedback1">Berhasil</label>
            </div>
            <div class="custom-control custom-radio mb-3">
                <input type="radio" id="feedback2" name="feedback" value="0" class="custom-control-input">
                <label class="custom-control-label" for="feedback2">Gagal</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="comment" class="col-sm-4 col-form-label">{{ __('Comment') }}</label>
        <div class="col-sm-8">
            <textarea name="comment" type="text" class="form-control" value="{{ $user->comment ?? '' }}"  id="comment" required></textarea>
        </div>
    </div>
    <button type="submit" class="offset-md-4 col-sm-8 btn btn-primary">Submit</button>
</div>
</form>
