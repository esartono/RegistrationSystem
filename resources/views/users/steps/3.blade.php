@if(auth()->user()->verified)
<h2 class="card-title">Testing</h2>
<p class="card-text pb-3">Silahkan mengunduh file <a class="btn btn-warning">seb</a></p>
<p>Untuk digunakan sebagai ujicoba apakah PC atau Laptop <br>anda dapat mengakses aplikasi TES.</p>
<p>Apabila Anda sudah melakukan ujicoba silahkan klik "Lanjut"</p>
<br>
<form action="{{url('user', [auth()->user()])}}" method="POST">
@method('PUT')
@csrf
<input name="step" type="hidden" class="form-control" id="name" value="3" readonly>
<button type="submit" class="offset-md-4 col-sm-8 btn btn-primary">Lanjut</button>
</form>
@else
<h2 class="text-danger">Saat ini Akun Anda belum terverifikasi oleh Panitia.</h2>
@endif
