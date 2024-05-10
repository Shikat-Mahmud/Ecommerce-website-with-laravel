<section class="space-y-6">
    <header>
        <h4 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h4>

        <p class="mt-1 text-sm text-secondary">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#confirm-user-deletion" style="background-color: #b73a3a; border: none;">
        {{ __('Delete Account') }}
    </button>

    <div class="modal fade m-t-60" id="confirm-user-deletion" tabindex="-1" aria-labelledby="confirm-user-deletion-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6" style="margin: 30px;">
                    @csrf
                    @method('delete')

                    <h4 class="text-lg font-medium text-gray-900">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h4>

                    <p class="mt-1 text-sm text-secondary">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-3">
                        <label for="password" class="form-label visually-hidden">{{ __('Password') }}</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                        @error('password', 'userDeletion')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary m-r-5" data-bs-dismiss="modal">
                            {{ __('Cancel') }}
                        </button>

                        <button type="submit" class="btn btn-danger ms-3" style="background-color: #b73a3a; border: none;">
                            {{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
