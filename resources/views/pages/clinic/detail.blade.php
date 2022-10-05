<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detail Clinic</h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="overflow-x-auto">
            <form method="POST" action="{{route('clinic.store')}}">
              @csrf
              <div style="margin-bottom: 1rem;">
                <label for="clinic_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Clinic Code</label>
                <input type="text" id="clinic_code" name="clinic_code" class="border bg-gray-700 border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5" readonly value="{{$clinic->code}}">
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="clinic_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Clinic Name</label>
                <input type="text" id="clinic_name" name="clinic_name" class="border bg-gray-700 border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5" readonly value="{{$clinic->name}}">
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Clinic Address</label>
                <textarea id="address" name="address" rows="4" class="bg-gray-700 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" placeholder="Your address..." disabled>{{$clinic->address}}</textarea>
              </div>
              <div class="flex justify-end">
                <a href="{{url()->previous()}}" class="text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>