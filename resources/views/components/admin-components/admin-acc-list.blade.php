@props(['studentID', 'fName', 'lName', 'program', 'batchYear', 'status'])
<tr class="border-b last:border-b-0 odd:bg-gray-100">
    <td class="px-2 py-2  max-w-[5px] truncate overflow-hidden whitespace-nowrap"><input type="checkbox" /></td>
    <td class="px-2 py-2  max-w-[50px] truncate overflow-hidden whitespace-nowrap">{{ $studentID }}</td>
    <td class="px-2 py-2 truncate max-w-[100px] overflow-hidden whitespace-nowrap uppercase" title="{{ $fName }}">{{ $fName }}</td>
    <td class="px-2 py-2 truncate max-w-[100px] overflow-hidden whitespace-nowrap uppercase" title="{{ $lName }}">{{ $lName }}</td>
    <td class="px-2 py-2 max-w-[55px] truncate overflow-hidden whitespace-nowrap" title="{{ $program }}">{{ $program }}</td>
    <td class="px-2 py-2 max-w-[50px] truncate overflow-hidden whitespace-nowrap ">{{ $batchYear }}</td>
    <td class="px-2 py-2  max-w-[50px] truncate overflow-hidden whitespace-nowrap ">{{ $status }}</td>
    <td class=" relative px-4 py-2 max-w-[35px]">
        <button
            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
        </button>
        <div
            class="dropdown-menu hidden absolute right-7 z-[100] w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
            <form action="">
                <a href="#"
                    class="block py-1 px-4 hover:bg-gray-100 ">View</a>
                <a href="#"
                    class="block py-1 px-4 hover:bg-gray-100 ">Edit</a>
                <a href="#"
                    class="block py-1 px-4 hover:bg-gray-100 ">Reset</a>
                <a href="#"
                    class="block py-1 px-4 hover:bg-gray-100 ">Delete</a>
            </form>
        </div>
    </td>
</tr>