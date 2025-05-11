@include('./includes/header')
@include('./includes/sidebar')
<br>
<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        <div id="accordion-flush" data-accordion="collapse"
            data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400">
            <h2 id="accordion-flush-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                    aria-controls="accordion-flush-body-1">
                    <span>Cultural Value Blog</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <form id="newfrm">
                        @csrf
                        <div class="grid md:grid-cols-4 md:gap-6">
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                    Title</label>
                                <input type="text"  id="title" autocomplete="off" placeholder="Name Here"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Amharic
                                    Title</label>
                                <input type="text"  id="atitle" autocomplete="off" placeholder="Amharic Name Here"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Author</label>
                                <input type="text"  id="auth" autocomplete="off" placeholder="Location Here"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Amharic Author</label>
                                <input type="text"  id="aauth" autocomplete="off" placeholder="Location Here"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <br>
                        <div class="grid md:grid-cols-4 md:gap-6">
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Image</label>
                                <input type="file"  id="img" autocomplete="off" placeholder="Location Here"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                    Description</label>
                                    <textarea id="desc" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Description Here..." required></textarea>
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                    Description Amharic</label>
                                    <textarea id="adesc" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Amharic Description Here..." required></textarea>
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">&nbsp;</label>
                                <button type="submit"
                                    class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 21a9 9 0 1 1 0-18c1.052 0 2.062.18 3 .512M7 9.577l3.923 3.923 8.5-8.5M17 14v6m-3-3h6" />
                                    </svg>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-none rounded-lg dark:border-gray-700 mt-14">
        <table id="dataTable" class="stripe hover" style="width:100%">
            <thead>
                <tr>
                    <th style="text-align: left">SN.No</th>
                    <th style="text-align: left">Title</th>
                    <th style="text-align: left">Amharic Title</th>
                    <th style="text-align: left">Description</th>
                    <th style="text-align: left">Amharic Description</th>
                    <th style="text-align: left">Author</th>
                    <th style="text-align: left">Amharic Author</th>
                    <th style="text-align: left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key)
                    <tr>
                        <td style="text-align: left">{{ $loop->index + 1 }}</td>
                        <td>{{ $key->title}}</td>
                        <td>{{ $key->atitle }}</td>
                        <td>{{ $key->det}}</td>
                        <td>{{ $key->aDet}}</td>
                        <td>{{ $key->aut}}</td>
                        <td>{{ $key->aAut}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('./includes/footer')
