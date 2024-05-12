@push('styles')
<style>
  .profile-menu-item{
    color: #2B2D42;
    font-size: 15px;
    font-weight: 500;
  }

  .profile-logout{
    color: #b73a3a !important;
  }

  .profile-menu-item:hover{
    color: #2B2D42;
  }

  .profile-menu{
    border-bottom: 1px solid #2B2D42;
    border-radius: 0px;
  }

  .profile-menu:hover{
    background-color: #f2f2f2;
  }

  .profile-menu-icon{
    font-size: 15px;
    margin-right: 5px;
  }

  .active-pro-menu{
    border-bottom: none;
    border-radius: 4px;
    background-color: #717fe0; 
    color: #fff;
  }

  .active-pro-menu:hover{
    background-color: #717fe0; 
  }
</style>
@endpush
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
      <div class="card-body p-10 my-4">
        <ul class="list-group list-group-flush rounded-3">
          <a href="{{ route('profile') }}" class="profile-menu-item">
            <li class="p-2 pl-3 profile-menu {{ Route::is('profile') ? 'active-pro-menu' : '' }}"><i class="fas fa-user-edit profile-menu-icon"></i> 
              Edit Profile
            </li>
          </a>
          <a href="{{ route('update.password') }}" class="profile-menu-item">
            <li class="p-2 pl-3 profile-menu {{ Route::is('update.password') ? 'active-pro-menu' : '' }}"><i class="fas fa-key profile-menu-icon"></i> 
              Update Password
            </li>
          </a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="profile-menu-item profile-logout">
            <li class="p-2 pl-3 profile-menu" style="border: none;"><i class="fas fa-sign-out-alt profile-menu-icon"></i> 
              Logout
            </li>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          </a>
        </ul>
      </div>
    </div>
</div>