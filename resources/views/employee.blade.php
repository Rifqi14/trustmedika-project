<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('employee.employee') }}</h2>
    <a href="{{route('employee.create')}}" class="text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Create</a>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                  <th scope="col" class="py-3 px-6 text-center">No</th>
                  <th scope="col" class="py-3 px-6">Name - Position</th>
                  <th scope="col" class="py-3 px-6">Date of Birth - Age</th>
                  <th scope="col" class="py-3 px-6">Address</th>
                  <th scope="col" class="py-3 px-6 text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b">
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap text-center">1</td>
                  <td class="py-4 px-6">Muhammad Rifqi</td>
                  <td class="py-4 px-6">Muhammad Rifqi</td>
                  <td class="py-4 px-6">Muhammad Rifqi</td>
                  <td class="py-4 px-6 text-center">
                    <button data-tooltip-target="tooltip-create" type="button" class="text-gray-500 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                    </button>
                    <button data-tooltip-target="tooltip-update" type="button" class="text-gray-500 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                    </button>
                    <button data-tooltip-target="tooltip-delete" type="button" class="text-gray-500 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                      </svg>
                    </button>
                    <div id="tooltip-create" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-black bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                      Create
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="tooltip-update" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-black bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                      Update
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="tooltip-delete" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-black bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                      Delete
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>