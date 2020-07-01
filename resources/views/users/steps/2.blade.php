<h2 class="card-title">Aplikasi yang harus tersedia</h2>
<p class="card-text pb-3">Silahkan menginstall aplikasi berikut :</p>
<ol>
    <li><a href="https://zoom.us/download" target="_blank" class="btn btn-info m-2"> Aplikasi Zoom </a></li>
    <li><a href="https://safeexambrowser.org/download_en.html" class="btn btn-info m-2" target="_blank">Aplikasi Safe Exam Browser (SEB)</a></li>
</ol>
<p>Jika Anda sudah menginstall aplikasi tersebut silahkan klik "Lanjut"</p>
<br>
<form action="{{url('user', [auth()->user()])}}" method="POST">
@method('PUT')
@csrf
<input name="step" type="hidden" class="form-control" id="name" value="2" readonly>
<button type="submit" class="offset-md-4 col-sm-8 btn btn-primary">Lanjut</button>
</form>
