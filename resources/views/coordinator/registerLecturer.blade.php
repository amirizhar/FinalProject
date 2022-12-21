<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('coordinator.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('coordinator.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <center><h1 class="card-title">Register Lecturer Acoount</h1></center>
                                    <div class="table-responsive">

                                        <div class="container">

                                            <x-guest-layout>
                                                <x-jet-authentication-card>
                                            
                                                    <x-slot name="logo" >
                                                    </x-slot>
                                            
                                                    <x-jet-validation-errors class="mb-4" />

                                                    <form method="POST" action="/addLecturer">
                                                        @csrf
                                            
                                                        <div>
                                                            <x-jet-label for="name" value="{{ __('Name') }}" />
                                                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                        </div>
                                            
                                                        <div class="mt-4">
                                                            <x-jet-label for="email" value="{{ __('Email') }}" />
                                                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                                        </div>
                                            
                                                        <div class="mt-4">
                                                            <x-jet-label for="password" value="{{ __('Password') }}" />
                                                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                                        </div>
                                            
                                                        {{-- <div class="mt-4">
                                                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                        </div> --}}
                                            
                                                        {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                            <div class="mt-4">
                                                                <x-jet-label for="terms">
                                                                    <div class="flex items-center">
                                                                        <x-jet-checkbox name="terms" id="terms" required />
                                            
                                                                        <div class="ml-2">
                                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                            ]) !!}
                                                                        </div>
                                                                    </div>
                                                                </x-jet-label>
                                                            </div>
                                                        @endif --}}
                                            
                                                        <div class="flex items-center justify-end mt-4">
                                            
                                                            <x-jet-button class="ml-4">
                                                                {{ __('Register') }}
                                                            </x-jet-button>
                                                        </div>
                                                    </form>
                                                </x-jet-authentication-card>
                                            </x-guest-layout>
                                        </div>
                                    </div><!-- /.container -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('coordinator.footer')
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    @include('coordinator.adminscript')
</body>

</html>
