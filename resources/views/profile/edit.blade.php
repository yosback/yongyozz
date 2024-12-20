<x-classroom-layout>
    <div class="bg-white shadow-sm rounded-lg">
        <div class="border-b border-gray-200 px-6 py-4">
            <h2 class="text-xl font-semibold text-gray-800">{{ __('Edit Profile') }}</h2>
        </div>

        <div class="p-6 space-y-6">
            <!-- Profile Information -->
            <div class="bg-white border border-gray-200 rounded-lg">
                <div class="p-6">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Update Password -->
            <div class="bg-white border border-gray-200 rounded-lg">
                <div class="p-6">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete Account -->
            <div class="bg-white border border-gray-200 rounded-lg">
                <div class="p-6">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-classroom-layout>
