<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>
    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/job_listing/{{ $job['id'] }}" class="block">
                <div class="container mx-auto bg-white rounded-lg shadow-md p-4 w-4/5 hover:bg-orange-500 hover:text-white transition duration-200">
                    <li class="text-gray-800 font-semibold">Title: {{ $job['title'] }}</li>
                    <li class="text-gray-600">Salary: {{ $job['salary'] }}</li>
                </div>
            </a>
        @endforeach
    </ul>
</x-layout>
