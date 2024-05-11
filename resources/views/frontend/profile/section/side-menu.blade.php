<div class="col-lg-4">
  <div class="card mb-4" style="border: none;">
    <div class="card-body text-center">
        @if (isset($user->photo))
          <img src="{{ asset('storage/' . $user->photo) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:150px; object-fit: cover;">
        @else
          <img src="{{ asset('/') }}frontend/images/user-avatar.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:150px; object-fit: cover;">
        @endif
        <h5 class="m-t-20 mb-1">{{ $user->name }}</h5>
        <p class="text-muted mb-1">{{ $user->email }}</p>
        <!-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
    </div>
  </div>
    <div class="card mb-4 mb-lg-0" style="border: none;">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush rounded-3">
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <a href="{{ route('profile') }}">Edit Profile</a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <a href="{{ route('update.password') }}">Update Password</a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <i class="fab fa-github fa-lg text-body"></i>
            <p class="mb-0">mdbootstrap</p>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
            <p class="mb-0">@mdbootstrap</p>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
            <p class="mb-0">mdbootstrap</p>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
            <p class="mb-0">mdbootstrap</p>
          </li>
        </ul>
      </div>
    </div>
</div>