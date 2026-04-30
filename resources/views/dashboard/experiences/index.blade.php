<x-app-layout>
    <x-slot name="header">
       <div class="flex items-center justify-between">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin.Experiences') }}
        </h2>
        <a class="bg-green-600 p-1 px-8 rounded text-white hover:bg-green-700 duration-200" href="{{route('dashboard.experiences.create')}}">{{__('ADD Experiences')}}</a>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Company
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Location
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Updated AT
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($experiences as $experience)
            <tr class="bg-neutral-primary border-b border-default">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    {{$experience->id}}
                </th>
                <td class="px-6 py-4">
                    {{$experience->title_trans}}
                </td>
                <td class="px-6 py-4">
                    {{$experience->company_trans}}
                </td>
                <td class="px-6 py-4">
                    {{$experience->location_trans}}
                </td>
                <td class="px-6 py-4">
                    {{$experience->created_at->format('d/m/Y')}}
                </td>
                <td class="px-6 py-4">
                    {{$experience->updated_at->diffForHumans()}}
                </td>
                <td class="px-6 py-4">
                    <a class="bg-blue-600 p-1 px-8 rounded text-white hover:bg-blue-700 duration-200" href="{{ route('dashboard.experiences.edit',$experience->id) }}">Edit</a>
                    <form class="inline" action="{{ route('dashboard.experiences.destroy',$experience->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-600 p-1 px-8 rounded text-white hover:bg-red-700 duration-200" onclick="return confirm('Are You Shure')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
             <tr class="bg-neutral-primary border-b border-default">
                <td colspan="8" class="px-6 py-4">
                    There Is No Data
                </td>
                </tr>
            @endforelse
        </tbody>
    </table>
     {{--  {{ $categories->links('vendor.pagination.tailwind') }}  --}}
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

