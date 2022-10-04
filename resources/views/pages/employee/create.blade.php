<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('employee.employee') }}</h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="overflow-x-auto">
            <form method="POST">
              @csrf
              <div style="margin-bottom: 1rem;">
                <label for="employee_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Employee Number</label>
                <input type="text" id="employee_number" name="employee_number" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5">
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="employee_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Employee Name</label>
                <input type="text" id="employee_name" name="employee_name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5">
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="gender_label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gender</label>
                <div class="flex">
                  <div class="flex items-center" id="gender_label" style="margin-left: 1rem;">
                    <input type="radio" id="gender_male" value="M" name="employee_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                    <label for="gender_male" class="ml-2 text-sm font-medium text-gray-900">Male</label>
                  </div>
                  <div class="flex items-center" id="gender_label" style="margin-left: 1rem;">
                    <input type="radio" id="gender_female" value="M" name="employee_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                    <label for="gender_female" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>