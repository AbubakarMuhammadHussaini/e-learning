<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Allocation') }} for {{ $session->name }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-6">
                        <form method="POST" action="{{ route('allocations.store') }}">
                            @csrf

                            <input type="hidden" name="session_id" value="{{ $session->id }}" />

                            <!-- Instructor -->
                            <div class="mt-3">
                                <x-label for="instructor" :value="__('Choose Instructor')"/>
                                <select name="instructor_id" id="instructor" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
                                @foreach($instructors as $instructor)
                                    <option value="{{ $instructor->id }}">{{ $instructor->name  }}</option>
                                @endforeach
                                </select>
                            </div>

                            <!-- Courses -->
                            <div class="mt-3">
                                <x-label for="courses" :value="__('Choose Courses')"/>

                                <div class="grid grid-cols-3 gap-4">
                                    @foreach($courses as $course)
                                        <div>
                                            <input type="checkbox" name="courses[]" value="{{ $course->id }}" id="course_{{ $course->id }}">
                                            <label for="course_{{ $course->id }}">{{ $course->title }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                    {{ __('Submit') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>






