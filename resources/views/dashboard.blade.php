{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--         <h2 class="font-bold text-2xl text-white bg-gradient-to-r from-[#c21108] to-[#000308] px-4 py-2 rounded-md shadow-md inline-block">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">--}}
{{--            <h2 class="font-bold text-2xl text-gray-800">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </h2>--}}

{{--                <a href="{{ route('dashboard') }}"--}}
{{--                    class="font-bold text-2xl text-white bg-gradient-to-r from-[#c21108] to-[#000308] px-4 py-2 rounded-md shadow-md inline-block hover:from-[#000308] hover:to-[#c21108] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#c21108] transition duration-300 ease-in-out">--}}
{{--                    {{ __('Dashboard') }}--}}
{{--                </a>--}}


{{--        </div>--}}
{{--    </x-slot>--}}

{{--    <div class="mt-10  md:px-32">--}}
{{--        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center my-12">📊 Business-wise Analytics</h3>--}}


{{--    </div>--}}

{{--</x-app-layout>--}}


<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-[#c21108] to-[#000308] p-6 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <h2 class="text-3xl font-bold text-white">📊 Dashboard</h2>
                <a href="{{ route('dashboard') }}"
                   class="bg-white text-[#c21108] font-semibold px-4 py-2 rounded-md shadow hover:bg-[#c21108] hover:text-white transition duration-300">
                    Refresh
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12 px-6 md:px-16 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto">
            <h3 class="text-2xl font-semibold text-gray-800 mb-8">Welcome back! Here's your business overview:</h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <a href="{{route('users')}}">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300 border-l-4 border-blue-500">
                    <div class="flex items-center justify-between mb-3">
                        <div class="text-sm font-medium text-gray-500">Total Users</div>
                        <div class="text-blue-500 text-2xl">👥</div>
                    </div>
                    <div class="text-3xl font-bold text-gray-800">{{ $totalUsers }}</div>
                </div>
                </a>

                <!-- Card 2 -->
                <a href="{{route('application.index')}}">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300 border-l-4 border-green-500">
                    <div class="flex items-center justify-between mb-3">
                        <div class="text-sm font-medium text-gray-500">Job Applications</div>
                        <div class="text-green-500 text-2xl">📄</div>
                    </div>
                    <div class="text-3xl font-bold text-gray-800">{{ $jobApplications }}</div>
                </div>
                </a>

                <!-- Card 3 -->
                <a href="{{route('contact.index')}}">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300 border-l-4 border-yellow-500">
                    <div class="flex items-center justify-between mb-3">
                        <div class="text-sm font-medium text-gray-500">Contacts</div>
                        <div class="text-yellow-500 text-2xl">📞</div>
                    </div>
                    <div class="text-3xl font-bold text-gray-800">{{ $contacts }}</div>
                </div>
                </a>

                <!-- Card 4 -->
                {{--                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300 border-l-4 border-purple-500">--}}
                {{--                    <div class="flex items-center justify-between mb-3">--}}
                {{--                        <div class="text-sm font-medium text-gray-500">Packages Sold</div>--}}
                {{--                        <div class="text-purple-500 text-2xl">📦</div>--}}
                {{--                    </div>--}}
                {{--                    <div class="text-3xl font-bold text-gray-800">{{ $packages }}</div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</x-app-layout>





