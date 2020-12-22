
  @extends('layout')
  @section('styles')
    @include('share.flatpickr.styles')
  @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">シフトを申請する</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('folders.create') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="title">日付</label>
                <input type="date" class="form-control" name="title" id="title" value="date" />
                <label for="title">シフトタイプ</label>
                <!-- <input type="date" class="form-control" name="title" id="title" value="date" /> -->
                <br>
                <form action="#" method="post" class="form-control" name="title" id="title" value="date">
                  <select name="sample">
                  <option value="">選択してください</option>
                    <option value="1">A(9:00~18:00)</option>
                    <option value="2">B(10:00~19:00)</option>
                    <option value="3">C(11:00~20:00)</option>
                  </select>
                </form>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('share.flatpickr.scripts')
@endsection

  </main>
</body>
</html>