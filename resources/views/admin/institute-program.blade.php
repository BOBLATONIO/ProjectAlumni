<x-layout.admin-layout pageTitle="Manage Content">
    <x-slot:headerTab>
        <button
            class="flex items-center gap-2 text-sm px-5 py-1.5 rounded-sm bg-gray-800 border border-gray-800 text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Import Alumni List
        </button>
    </x-slot:headerTab>

    <div class="mx-1 mb-4 bg-gray-50 mt-3 border rounded-lg shadow-sm ">
       
        
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase font-semibold border-b border-b-gray-300 d">
                <tr>
                    
                    <td scope="col" class="px-4 py-3 border-r last:border-0 max-w-[100px] truncate overflow-hidden whitespace-nowrap ">
                        Institute
                    </td>
                    <td scope="col" class="px-4 py-3 border-r last:border-0 max-w-[30px] truncate overflow-hidden whitespace-nowrap ">
                        Initialism
                    </td>
                    <td scope="col" class="px-4 py-3 border-r last:border-0 max-w-[100px] truncate overflow-hidden whitespace-nowrap">
                        Program
                    </td>
                    <td scope="col" class="px-4 py-3 border-r last:border-0 max-w-[30px] truncate overflow-hidden whitespace-nowrap ">
                        Initialism
                    </td>
                    <td scope="col" class="px-4 py-3 border-r last:border-0 max-w-[35px] truncate overflow-hidden whitespace-nowrap ">Action
                    </td>
                </tr>
            </thead>
            <tbody class="text-gray-800 font-light">
                <tr class="border-b border-gray-300 last:border-b-0">
                    <td class="px-4 py-2 truncate max-w-[120px] border-r overflow-hidden whitespace-nowrap" title="">
                        Institute of Information Technology and Innovation
                    </td>
                    <td class="px-4 py-2 truncate max-w-[30px] border-r overflow-hidden whitespace-nowrap" title="">
                        IITI
                    </td>
                    <td class=" truncate max-w-[120px] border-r overflow-hidden" title="">
                        <div class="border-b  py-1 px-2 last:border-none">Bachelor of Science in Information Technology</div>
                        <div class="border-b  py-1 px-2 last:border-none">Bachelor of Science in Cybersecurity</div>
                        <div class="border-b  py-1 px-2 last:border-none">Associate in Computer Technology</div>
                    </td>
                    <td class="px-4 py-2 truncate max-w-[30px] border-r overflow-hidden whitespace-nowrap" title="">
                        <div>BSIT</div>
                        <div>BSIT</div>
                        <div>BSIT</div>
                    </td>
                    <td class="px-2 py-3 max-w-[35px]">
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr class="border-t border-gray-200 bg-gray-50">
                    <td class="p-3" rowspan="2">College of Computing</td>
                    <td class="p-3" rowspan="2">CoC</td>
                    <td class="p-3">Bachelor of Science in Information Technology</td>
                    <td class="p-3">BSIT</td>
                    <td class="p-3 text-center space-x-2">
                      <button class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</button>
                      <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                    </td>
                  </tr>
                  <tr class="bg-white">
                    <td class="p-3">Bachelor of Science in Computer Science</td>
                    <td class="p-3">BSCS</td>
                    <td class="p-3 text-center space-x-2">
                      <button class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</button>
                      <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                    </td>
                  </tr>
                  <tr class="bg-white">
                    <td class="p-3">Bachelor of Science in Computer Science</td>
                    <td class="p-3">BSCS</td>
                    <td class="p-3 text-center space-x-2">
                      <button class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</button>
                      <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                    </td>
                  </tr>
                
                
                
            </tbody>
        </table>
    </div>
        


    <x-slot:modal>
    </x-slot:modal>

    @push('scripts')
    <script>
    </script>
    @endpush


</x-layout.admin-layout>