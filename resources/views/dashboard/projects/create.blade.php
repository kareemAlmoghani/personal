<x-app-layout>
    <x-slot name="header">
       <div class="flex items-center justify-between">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin.Projects') }}
        </h2>
        <a class="bg-green-600 p-1 px-8 rounded text-white hover:bg-green-700 duration-200" href="{{route('dashboard.projects.index')}}">{{__('All Projects')}}</a>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="name_en" :value="__('English Name')" />
                            <x-text-input id="name_en" class="block mt-1 w-full" type="text" name="name_en" :value="old('name_en')" required   />
                            <x-input-error :messages="$errors->get('name_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="name_ar" :value="__('Arabic Name')" />
                            <x-text-input id="name_ar" class="block mt-1 w-full" type="text" name="name_ar" :value="old('name_ar')" required   />
                            <x-input-error :messages="$errors->get('name_ar')" class="mt-2" />
                         </div>
                         </div>
                         <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="image" :value="__('Project Image')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required   />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="link" :value="__('Project Link')" />
                            <x-text-input id="link" class="block mt-1 w-full" type="text" name="link" :value="old('link')"    />
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                         </div>
                         </div>
                          <div class="mt-4 grid grid-cols-2 gap-4">
                         <div class="mt-4">
                            <x-input-label for="content_en" :value="__('English content')" />
                            <x-text-textarea id="content_en" class="block mt-1 w-full" type="text" name="content_en" required   >
                                {{ old('content_en') }}
                            </x-text-textarea>
                            <x-input-error :messages="$errors->get('content_en')" class="mt-2" />
                         </div>
                          <div class="mt-4">
                            <x-input-label for="content_ar" :value="__('Arabic content')" />
                            <x-text-textarea id="content_ar" class="block mt-1 w-full" type="text" name="content_ar" :value="old('content_ar')" required   >
                                {{old('content_ar')}}
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

