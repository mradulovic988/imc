<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{--            {{ __('Dashboard') }}--}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <div class="flex flex-wrap bg-gray-100 w-full h-screen">
                <div class="w-3/12 bg-white rounded p-3 shadow-lg">
                    <x-dashboard.sidebar-info/>
                    <x-dashboard.vertical-sidebar/>
                </div>

                <div class="w-9/12 bg-white rounded">
                    <div class="p-4 text-gray-500">
                        <table class="min-w-full">
                            <thead class="bg-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Avatar
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Name
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    E-mail
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Country
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr id="userTableRow"
                                    class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        @if ($user->file)
                                            <img class="w-12 h-12 object-cover rounded-full"
                                                 src="{{ asset('storage/' . $user->file) }}" alt="">
                                        @else
                                            <img class="w-12 h-12 object-cover rounded-full"
                                                 src="img/profile/avatar.jpeg" alt="">
                                        @endif
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $user->name . ' ' . $user->last_name ?? '' }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $user->country }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap inline-flex gap-2 mt-3">
                                        <button id="showUser">
                                            <svg width="24" height="24" version="1.1" id="Capa_1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 57.945 57.945"
                                                 style="enable-background:new 0 0 57.945 57.945;"
                                                 xml:space="preserve"><circle style="fill:#3083C9;" cx="28.973"
                                                                              cy="29.472" r="12"/>
                                                <path style="fill:none;stroke:#C6E2F7;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                                                      d="M36,29.472c0,3.866-3.134,7-7,7s-7-3.134-7-7s3.134-7,7-7"/>
                                                <path style="fill:none;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                                                      d="M1,29.309l0.23-0.232c15.349-15.473,40.366-15.473,55.715,0l0,0"/>
                                                </svg>
                                        </button>

                                        <button id="deleteUser" type="button">
                                            <svg id="Layer_1" width="24" height="24" data-name="Layer 1"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                <defs>
                                                    <style>.cls-1 {
                                                            fill: #2e79bd;
                                                        }

                                                        .cls-2 {
                                                            fill: #2d3e50;
                                                        }</style>
                                                </defs>
                                                <title>x</title>
                                                <path class="cls-1"
                                                      d="M17.66229,21.88486,63.3847,30.82574l45.72241,8.94088a1.559,1.559,0,0,0,1.82788-1.22994A10.15176,10.15176,0,0,0,102.9192,26.6239l-15.172-2.96684.79656-4.07352A11.10952,11.10952,0,0,0,79.7827,6.56318L57.33412,2.17343A11.1096,11.1096,0,0,0,44.31375,10.9345L43.51718,15.008l-15.172-2.96685A10.15176,10.15176,0,0,0,16.43235,20.057a1.559,1.559,0,0,0,1.22994,1.82788ZM60.0674,9.82374,74.369,12.62036a8.2641,8.2641,0,0,1,6.5245,9.69647h0l-15.2613-2.9843L50.37093,16.34825h0A8.2641,8.2641,0,0,1,60.0674,9.82374Z"/>
                                                <path class="cls-2"
                                                      d="M110.58839,47.36161H17.41161a1.559,1.559,0,0,0-1.55785,1.55785v5.90918c0,.85949,16.14275,61.05238,16.14275,61.05238a11.08149,11.08149,0,0,0,11.03938,10.153H84.96412A11.08149,11.08149,0,0,0,96.0035,115.881s16.14275-60.19289,16.14275-61.05238V48.91946A1.559,1.559,0,0,0,110.58839,47.36161Zm-61.934,64.2194a2.60793,2.60793,0,0,1-3.19666-1.84821c-4.44239-16.61345-8.95983-33.53068-11.91535-44.72956a2.61069,2.61069,0,1,1,5.04851-1.33243c2.95407,11.19159,7.47077,28.10409,11.911,44.71353A2.61043,2.61043,0,0,1,48.65435,111.581Zm17.95316-2.52243a2.61095,2.61095,0,0,1-5.22189,0V64.337a2.61095,2.61095,0,0,1,5.22189,0ZM94.45735,65.00325C91.3685,76.70879,86.46715,95.05644,82.542,109.73317a2.61073,2.61073,0,1,1-5.04414-1.34918c3.9237-14.67272,8.8236-33.01491,11.911-44.71316a2.61069,2.61069,0,1,1,5.04851,1.33243Z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-6 p-4">
                            {{$users->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($users as $user)
        <x-dashboard.show-user-modal :user="$user"/>
        <x-dashboard.delete-user-modal :user="$user"/>
    @endforeach
</x-app-layout>