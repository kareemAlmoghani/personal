<x-app-layout>
    <x-slot name="header">
       <div class="flex items-center justify-between">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin.Settings') }}
        </h2>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
            <form action="{{route('dashboard.settings')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
                <h3 class="mt-2 text-lg font-bold">General Settings</h3>
            <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="site_name" class="!text-base" :value="__('Site Name')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="site_name" class="block mt-1 w-full" type="text" name="site_name" :value="$settings['site_name']??''" />
                   </div>
              </div>
                <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="site_skills" class="!text-base" :value="__('Site Skills')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="site_skills" class="block mt-1 w-full" type="text" name="site_skills" :value="$settings['site_skills']?? ''" />
                   </div>
              </div>
                <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="site_head" class="!text-base" :value="__('Site Head')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="site_head" class="block mt-1 w-full" type="text" name="site_head" :value="$settings['site_head']??''" />
                   </div>
              </div>
               <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="site_title" class="!text-base" :value="__('Site Title')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="site_title" class="block mt-1 w-full" type="text" name="site_title" :value="$settings['site_title']??''" />
                   </div>
              </div>
               <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="site_image" class="!text-base" :value="__('site Image')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="site_image" class="block mt-1 w-full" type="file" name="site_image"  />
                   @if (isset($settings['site_image']))
                   <img width="80" class="p-0.5 mt-1 border rounded" src="{{ asset($settings['site_image']) }}" alt="">
                   @endif

                   </div>
              </div>
               <hr class="mt-2">
                <h3 class="mt-2 text-lg font-bold">About Settings</h3>
                <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="about_title" class="!text-base" :value="__('About Title')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="about_title" class="block mt-1 w-full" type="text" name="about_title" :value="$settings['about_title']??''" />
                   </div>
              </div>
               <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="about_content" class="!text-base" :value="__('About Content')" />
                </div>
                <div class="col-span-2">
                   <x-text-textarea id="about_content" class="block mt-1 w-full" name="about_content">{{$settings['about_content']??''}}</x-text-textarea>
                   </div>
              </div>
               <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="github" class="!text-base" :value="__('Github')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="github" class="block mt-1 w-full" type="text" name="github" :value="$settings['github']??''" />
                   </div>
              </div>
               <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="linkedin" class="!text-base" :value="__('linkedin')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="linkedin" class="block mt-1 w-full" type="text" name="linkedin" :value="$settings['linkedin']??''" />
                   </div>
              </div>
              <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="facebook" class="!text-base" :value="__('Facebook')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" :value="$settings['facebook']??''" />
                   </div>
              </div>
               <hr class="mt-2">
                <h3 class="mt-2 text-lg font-bold">Contact Settings</h3>
              <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="contact_title" class="!text-base" :value="__('Contact Title')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="contact_title" class="block mt-1 w-full" type="text" name="contact_title" :value="$settings['contact_title']??''" />
                   </div>
              </div>
               <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="contact_head" class="!text-base" :value="__('Contact Head')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="contact_head" class="block mt-1 w-full" type="text" name="contact_head" :value="$settings['contact_head']??''" />
                   </div>
              </div>
               <div class="grid grid-cols-4 md:max-w-2xl items-center mt-4">
              <div>
                  <x-input-label for="contact_content" class="!text-base" :value="__('Contact Content')" />
                </div>
                <div class="col-span-2">
                   <x-text-input id="contact_content" class="block mt-1 w-full" type="text" name="contact_content" :value="$settings['contact_content']??''" />
                   </div>
              </div>
              <x-primary-button class="mt-6">Save</x-primary-button>
            </form>
              </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

