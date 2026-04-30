<x-app-layout>
    <x-slot name="header">
       <div class="flex items-center justify-between">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin.Experiences') }}
        </h2>
        <a class="bg-green-600 p-1 px-8 rounded text-white hover:bg-green-700 duration-200" href="{{route('dashboard.experiences.index')}}">{{__('All Experiences')}}</a>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('dashboard.experiences.store') }}" method="POST">
                    @csrf


                        <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="title_en" :value="__('English Title')" />
                            <x-text-input id="title_en" class="block mt-1 w-full" type="text" name="title_en" :value="old('title_en')" required   />
                            <x-input-error :messages="$errors->get('title_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="title_ar" :value="__('Arabic Title')" />
                            <x-text-input id="title_ar" class="block mt-1 w-full" type="text" name="title_ar" :value="old('title_ar')" required   />
                            <x-input-error :messages="$errors->get('title_ar')" class="mt-2" />
                         </div>
                         </div>
                        <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="start_date" :value="__('Start Experience Date')" />
                            <x-text-input id="start_date" class="block mt-1 w-full" type="text" name="start_date" :value="old('start_date')" required   />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="end_date" :value="__('End Experience Date')" />
                            <x-text-input id="end_date" class="block mt-1 w-full" type="text" name="end_date" :value="old('end_date')" required   />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                         </div>
                         </div>
                         <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="company_en" :value="__('English Company')" />
                            <x-text-input id="company_en" class="block mt-1 w-full" type="text" name="company_en" :value="old('company_en')" required />
                            <x-input-error :messages="$errors->get('company_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="company_ar" :value="__('Arabic Company')" />
                            <x-text-input id="company_ar" class="block mt-1 w-full" type="text" name="company_ar" :value="old('company_ar')" required  />
                            <x-input-error :messages="$errors->get('company_ar')" class="mt-2" />
                         </div>
                         </div>
                         <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="location_en" :value="__('English location')" />
                            <x-text-input id="location_en" class="block mt-1 w-full" type="text" name="location_en" :value="old('location_en')" required />
                            <x-input-error :messages="$errors->get('location_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="location_ar" :value="__('Arabic location')" />
                            <x-text-input id="location_ar" class="block mt-1 w-full" type="text" name="location_ar" :value="old('location_ar')" required  />
                            <x-input-error :messages="$errors->get('location_ar')" class="mt-2" />
                         </div>
                         </div>
                         <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="content_en" :value="__('English Content')" />
                            <x-text-textarea id="content_en" class="block mt-1 w-full" type="text" name="content_en" required >
                                {{ old('content_en') }}
                            </x-text-textarea>
                            <x-input-error :messages="$errors->get('content_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="content_ar" :value="__('Arabic Content')" />
                            <x-text-textarea id="content_ar" class="block mt-1 w-full" type="text" name="content_ar" :value="old('content_ar')" required  >
                                {{ old('content_ar') }}
                            </x-text-textarea>
                            <x-input-error :messages="$errors->get('content_ar')" class="mt-2" />
                         </div>
                         </div>
                     <button class=" mt-4 bg-green-600 p-1 px-8 rounded text-white hover:bg-green-700 duration-200">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

