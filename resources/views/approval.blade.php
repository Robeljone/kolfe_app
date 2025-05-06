@include('./includes/header')
@include('./includes/sidebar')
<br>
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-none rounded-lg dark:border-gray-700 mt-14">
        <button type="button"
            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            Pending Approval !
            <span
                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-black-800 bg-black-200 rounded-full">
                2
            </span>
        </button>
    </div>
    <div class="p-4 border-2 border-gray-200 border-none rounded-lg dark:border-gray-700 mt-14">
        <table id="dataTable" class="stripe hover" style="width:100%">
            <thead>
                <tr>
                    <th style="text-align: left">SN.No</th>
                    <th style="text-align: left">Requester</th>
                    <th style="text-align: left">Department</th>
                    <th style="text-align: left">Event Place</th>
                    <th style="text-align: left">Event Time</th>
                    <th style="text-align: left">Total People</th>
                    <th style="text-align: left">Rate Per Person</th>
                    <th style="text-align: left">Event Manager Name</th>
                    <th style="text-align: left">Event Manager Phone</th>
                    <th style="text-align: left">Approval Status</th>
                    <th style="text-align: left">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($data as $key)
                <tr>
                    <td style="text-align: left">{{ $loop->index + 1 }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->aName }}</td>
                    <td>
                        <div class="grid sm:grid-cols-2 md:gap-2">
                            <button type="button"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                                Edit
                            </button>
                            <button type="button"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                                List
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
@include('./includes/footer')