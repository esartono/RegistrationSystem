@if($verified)
    <a class="btn btn-sm btn-icon btn-success text-white">
        <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
        <span class="btn-inner--text">Verified</span>
    </a>
@else
    <a class="btn btn-sm btn-icon btn-danger text-white" href="{{ route('user.show', $id) }}">
        <span class="btn-inner--icon"><i class="fas fa-times"></i></span>
        <span class="btn-inner--text">Not Verified</span>
    </a>
@endif
