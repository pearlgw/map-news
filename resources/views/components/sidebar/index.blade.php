<aside id="default-sidebar"
    class="fixed top-0 left-0 z-50 w-64 h-screen transition-transform -translate-x-full lg:w-96 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-6 overflow-y-auto bg-slate-100">
        <h1 class="my-5 text-2xl font-semibold text-center">Map News</h1>
        <form class="max-w-lg mx-auto" action="{{ route('news.search') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="urlnews" class="block mb-2 text-sm font-medium">Link Url News</label>
                <input type="text" id="urlnews" name="urlnews"
                    class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                    placeholder="https://example.com/news" />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium" for="file">Upload File News <span class="text-red-500">(.*pdf)</span></label>
                <input class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" id="file"
                    type="file" name="file" accept=".pdf">
            </div>
            <button type="submit"
                class="text-white bg-[#1D1A22] hover:bg-gray-800 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
</aside>
