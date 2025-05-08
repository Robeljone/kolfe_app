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
                    <span>Event Booking</span>
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
                        Main Data
                        <hr>
                        <br>
                        <div class="grid md:grid-cols-4 md:gap-6">
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                Department</label>
                                <select name="type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option value="">Please Select type</option>
                                    @foreach($dep as $de)
                                    <option value="{{$de->id}}">{{$de->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                   Event Place</label>
                                <input type="text" name="" autocomplete="off" placeholder=" Place Here !"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                    Event Data</label>
                                <input type="date" name="" autocomplete="off" placeholder="Event date Here !"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                    Event Time</label>
                                <input type="time" name="" autocomplete="off" placeholder="Here !"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                        </div>
                        <br>
                        <hr>
                        Service Type
                        <hr>
                        <br>
                        <div class="grid md:grid-cols-4 md:gap-6">
                            @foreach($data as $item)
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                    {{$item->name}}</label>
                                <input type="text" name="{{$item->id.','.$item->name}}" autocomplete="off" placeholder="{{$item->name}} Here !"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            @endforeach
                        </div>
                        <br>
                        <hr>
                        Price
                        <hr>
                        <br>
                        <div class="grid md:grid-cols-4 md:gap-6">
                              <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                   Week days price</label>
                                <input type="text" name="" autocomplete="off" placeholder=" Place Here !"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                              </div>
                              <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                   Weekend price</label>
                                <input type="text" name="s" autocomplete="off" placeholder=" Place Here !"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                              </div>
                        </div>
                        <br>
                        <hr>
                        Organizer Details
                        <hr>
                        <br>
                        <div class="grid md:grid-cols-4 md:gap-6">
                            <div>
                              <label for="small-input"
                                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                 Contact Person Name</label>
                              <input type="text" name="" autocomplete="off" placeholder=" Place Here !"
                                  class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  required>
                            </div>
                            <div>
                              <label for="small-input"
                                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                 Contact Person Phone</label>
                              <input type="text" name="s" autocomplete="off" placeholder=" Place Here !"
                                  class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  required>
                            </div>
                            <div>
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                   Signature</label>
                                   <div id="signature-pad" class="signature-pad">
                                    <div id="canvas-wrapper" class="signature-pad--body">
                                      <canvas style="border: solid; border-color: black; width: auto; height: auto;"></canvas>
                                    </div>
                                    <br>
                                    <div class="signature-pad--footer">
                                      <div class="signature-pad--actions">
                                        <div class="column">
                                          <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 clear" data-action="clear">Clear Sign</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                        </div>
                        <br>
                        <div class="grid md:grid-cols-4 md:gap-6">
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
                        <td>{{ $key->type }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->disc }}</td>
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
                                    Delete
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
