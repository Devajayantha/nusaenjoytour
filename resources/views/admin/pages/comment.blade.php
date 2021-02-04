
@extends('admin.master')

@section('index')
<div id="wrapper">
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-book"></i>
          <span>Booking</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.comment') }}">
          <i class="fas fa-fw fa-star"></i>
          <span>Comment</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.package') }}">
          <i class="fas fa-fw fa-edit"></i>
          <span>Package</span>
        </a>
      </li> --}}
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Comment</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $index => $comment)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->message }}</td>
                            <td>{{ $comment->status_publish }}</td>
                            <td>
                                <form method="POST">
                                    @csrf
                                    @method('PUT')
                                    @if ($comment->is_status)
                                        <button type="submit" formaction="{{ route('dashboard.comment.unverify', ['comment' => $comment->id]) }}" class="btn btn-danger"><i class="fa fa-book"></i> Unverify</button>
                                    @else
                                        <button type="submit" formaction="{{ route('dashboard.comment.verify', ['comment' => $comment->id]) }}" class="btn btn-info"><i class="fa fa-star"></i> Verify Now</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Nusa Penida Enjoy Tour 2021</span>
          </div>
        </div>
      </footer>

    </div>
  </div>
@endsection
