<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Schedule</h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="overflow-x-auto">
            <form method="POST" action="{{route('schedule.update', $schedule->id)}}">
              @csrf
              @method('PUT')
              <div style="margin-bottom: 1rem;">
                <label for="employee_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Employee</label>
                <select id="employee_id" name="employee_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  <option>Choose a employee</option>
                  @foreach($employees as $employee)
                  <option value="{{$employee->id}}" @if($schedule->employee->id == $employee->id) selected @endif>{{$employee->name}}</option>
                  @endforeach
                </select>
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="clinic_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Clinic</label>
                <select id="clinic_id" name="clinic_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  <option>Choose a clinic</option>
                  @foreach($clinics as $clinic)
                  <option value="{{$clinic->id}}" @if($schedule->clinic_id == $clinic->id) selected @endif>{{$clinic->name}}</option>
                  @endforeach
                </select>
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="day" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Day</label>
                <select id="day" name="day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  <option selected>Choose a day</option>
                  @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $day)
                  <option value="{{$day}}" @if($schedule->day == $day) selected @endif>{{$day}}</option>
                  @endforeach
                </select>
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Start</label>
                <input type="time" id="start" name="start" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5" value="{{$schedule->start}}">
              </div>
              <div style="margin-bottom: 1rem;">
                <label for="end" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">End</label>
                <input type="time" id="end" name="end" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5" value="{{$schedule->end}}">
              </div>
              <div class="flex justify-end">
                <button type="submit" class="text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>