<div class="col-12 col-md-9">
    <div class="card">
        <div class="card-header justify-content-center">
        </div>
        <div class="row card-body">
            <!-- username -->
            <!-- username -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('username'):</label>
                    <x-input name="username" :value="old('username')" required placeholder="{{ __('username') }}" />
                    <!-- Ensure that the username input field has the correct name attribute -->
                </div>
            </div>

            <!-- email -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('email'):</label>
                    <x-input-email name="email" :value="old('email')" :required="true" />
                </div>
            </div>

            <!-- new password -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('password'):</label>
                    <x-input-password name="password" :required="true" />
                </div>
            </div>
            <!-- new password confirmation-->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('passwordConfirm'):</label>
                    <x-input-password name="password_confirmation" :required="true"
                                      data-parsley-equalto="input[name='password']"
                                      data-parsley-equalto-message="{{ __('passwordMismatch') }}" />
                </div>
            </div>
            <!-- gender -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('gender'):</label>
                    <x-select name="gender" :required="true">
                        @foreach ($gender as $key => $value)
                            <x-select-option :value="$key" :title="__($value)" />
                        @endforeach
                    </x-select>
                </div>
            </div>

            <!-- roles -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('roles'):</label>
                    <x-select name="roles" :required="true">
                        @foreach ($roles as $key => $value)
                            <x-select-option :value="$key" :title="__($value)" />
                        @endforeach
                    </x-select>


                </div>
            </div>
            <!-- birthday -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('birthday'):</label>
                    <x-input type="date" name="birthday" :required="true" />
                </div>
            </div>
        </div>
    </div>
</div>
