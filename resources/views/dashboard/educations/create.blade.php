<x-app-layout>
    <x-slot name="header">
       <div class="flex items-center justify-between">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin.Educations') }}
        </h2>
        <a class="bg-green-600 p-1 px-8 rounded text-white hover:bg-green-700 duration-200" href="{{route('dashboard.educationes.index')}}">{{__('All Educations')}}</a>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('dashboard.educationes.store') }}" method="POST">
                    @csrf
                        <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="start_date" :value="__('Start Education Date')" />
                            <x-text-input id="start_date" class="block mt-1 w-full" type="text" name="start_date" :value="old('start_date')" required   />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="end_date" :value="__('End Education Date')" />
                            <x-text-input id="end_date" class="block mt-1 w-full" type="text" name="end_date" :value="old('end_date')" required   />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                         </div>
                         </div>
                         <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="college_en" :value="__('English College')" />
                            <x-text-input id="college_en" class="block mt-1 w-full" type="text" name="college_en" :value="old('college_en')" required />
                            <x-input-error :messages="$errors->get('college_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="college_ar" :value="__('Arabic College')" />
                            <x-text-input id="college_ar" class="block mt-1 w-full" type="text" name="college_ar" :value="old('college_ar')" required  />
                            <x-input-error :messages="$errors->get('college_ar')" class="mt-2" />
                         </div>
                         </div>
                           <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="degree_en" :value="__('English Degree')" />
                            <x-text-input id="degree_en" class="block mt-1 w-full" type="text" name="degree_en" :value="old('degree_en')" required />
                            <x-input-error :messages="$errors->get('degree_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="degree_ar" :value="__('Arabic Degree')" />
                            <x-text-input id="degree_ar" class="block mt-1 w-full" type="text" name="degree_ar" :value="old('degree_ar')" required  />
                            <x-input-error :messages="$errors->get('degree_ar')" class="mt-2" />
                         </div>
                         </div>
                          <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="field_en" :value="__('English Field')" />
                            <x-text-input id="field_en" class="block mt-1 w-full" type="text" name="field_en" :value="old('field_en')" required />
                            <x-input-error :messages="$errors->get('field_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="field_ar" :value="__('Arabic Field')" />
                            <x-text-input id="field_ar" class="block mt-1 w-full" type="text" name="field_ar" :value="old('field_ar')" required  />
                            <x-input-error :messages="$errors->get('field_ar')" class="mt-2" />
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

