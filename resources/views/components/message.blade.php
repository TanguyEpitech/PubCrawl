<div>

    @if (\Session::has('alert'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('alert') !!}</li>
            </ul>
        </div>
    @endif


    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

</div>
