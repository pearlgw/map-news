<div class="h-full p-6 overflow-y-auto bg-slate-100 md:hidden">
    <h1 class="mb-5 text-2xl font-semibold text-center">Map News</h1>
    <!-- Menampilkan error -->
    @if ($errors->has('error'))
        <div class="mt-3 text-red-500">
            <ul>
                <li>{{ $errors->first('error') }}</li>
            </ul>
        </div>
    @endif
    <form class="max-w-lg mx-auto" action="{{ route('news.search') }}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="urlnews" class="block mb-2 text-sm font-medium">Link Url News</label>
            <input type="text" id="urlnews" name="urlnews"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="https://example.com/news" />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium" for="file">Upload File News <span
                    class="text-red-500">(.*pdf)</span></label>
            <input class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" id="file"
                type="file" name="file" accept=".pdf">
        </div>
        <button type="submit"
            class="text-white bg-[#1D1A22] hover:bg-gray-800 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Submit</button>
    </form>
</div>

<div class="md:ml-64 lg:ml-96">
    <div id="map" class="w-full h-[500px] md:h-screen"></div>
</div>

@push('after-scripts')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        let map;
        let locations = @json($news); // data dari controller

        function initMap() {
            const defaultCenter = {
                lat: -6.9665,
                lng: 110.4164
            };
            let center = defaultCenter;
            let zoomLevel = 13;

            map = L.map('map').setView(center, zoomLevel);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            const southWest = L.latLng(-8.744, 95.303);
            const northEast = L.latLng(5.889, 140.455);
            const bounds = L.latLngBounds(southWest, northEast);
            map.setMaxBounds(bounds);

            // Tambahkan marker jika ada data
            if (locations.length > 0) {
                addMarkers();

                // Mengambil data terbaru (marker terakhir)
                const latestLocation = locations[locations.length - 1];
                const latestLatLng = {
                    lat: parseFloat(latestLocation.latitude),
                    lng: parseFloat(latestLocation.longitude)
                };

                // Arahkan peta ke lokasi marker baru
                map.flyTo(latestLatLng, zoomLevel);
            }
        }

        function addMarkers() {
            locations.forEach(location => {
                const marker = L.marker([parseFloat(location.latitude), parseFloat(location.longitude)]).addTo(map);
                const popupContent = `
                        <table>
                            <tr>
                                <td colspan="3" class='pb-[15px] text-base font-bold text-center'>Description</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Casualities</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>${location.casualities}</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Supplies</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>${location.supplies}</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Disaster</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>${location.disaster}</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Organization</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>${location.organization}</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Scale</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>${location.scale}</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Person</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>${location.person}</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Time</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>${location.time}</td>
                            </tr>
                            <tr>
                                <td class='pb-2'>Route</td>
                                <td class='px-3 pb-2'>:</td>
                                <td class='pb-2'>
                                    <a href="https://www.google.com/maps/dir/?api=1&destination=${location.latitude},${location.longitude}"
                                    target="_blank">
                                        Get Location
                                    </a>
                                </td>
                            </tr>
                        </table>
                    `;
                marker.bindPopup(popupContent);
            });
        }

        window.onload = initMap;
    </script>

    <style>
        .leaflet-control-attribution {
            display: none !important;
        }
    </style>
@endpush
