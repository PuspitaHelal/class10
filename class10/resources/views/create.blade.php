<x-layout>
    <x-slot:heading>
        Create
    </x-slot:heading>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-6">
            <!-- Heading -->
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Create</h1>
            <!-- Form -->
            <form class="space-y-6" method="POST">
                <!-- Title Input -->
                @csrf
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        class="mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                        placeholder="Enter the title"
                    />
                </div>
                <!-- Body Textarea -->
                <div>
                    <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                    <textarea 
                        id="body" 
                        name="body" 
                        rows="5" 
                        class="mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                        placeholder="Enter the content"
                    ></textarea>
                </div>
                <!-- Submit Button -->
                <button 
    type="submit" 
    class="bg-blue-600 text-white py-1 px-3 text-sm rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
>
    Submit
</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
