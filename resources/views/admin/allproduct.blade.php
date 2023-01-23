@extends('admin.layout.template')
@section('page-title')
All Product - E - Fruit
@endsection
@section('content')
<nav class="flex bg-gray-50 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li class="inline-flex items-center">
        <a href="{{ route('admindashboard') }}" class="text-sm text-gray-700 hover:text-gray-900 inline-flex items-center dark:text-gray-400 dark:hover:text-white">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
          Home
        </a>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium dark:text-gray-500">Product</span>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <a href="{{ route('allsubcategory') }}" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium dark:text-gray-400 dark:hover:text-white">All Product</a>
        </div>
      </li>
    
    </ol>
  </nav>

<h4
class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
>
Available Product Information
</h4>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
<div class="w-full overflow-x-auto">
  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr
        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
      >
        <th class="px-4 py-3">ID</th>
        <th class="px-4 py-3">Product Name</th>
        <th class="px-4 py-3">Image</th>
        <th class="px-4 py-3">Price</th>
        <th class="px-4 py-3">Actions</th>
      </tr>
    </thead>
    <tbody
      class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
    >
      <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
          
              <div
                class="absolute inset-0 rounded-full shadow-inner"
                aria-hidden="true"
              ></div>
            </div>
            <div>
              <p class="font-semibold">1</p>
            </div>
          </div>
        </td>
        <td class="px-4 py-3 text-sm">
           Fan

        </td>
        <td class="px-4 py-3 text-xs">
         

        </td>
        <td class="px-4 py-3 text-sm">
          100
        </td>
        <td class="px-4 py-3">
          <div class="flex items-center space-x-4 text-sm">
            <button
              class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
              aria-label="Edit"
            >
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                ></path>
              </svg>
            </button>
            <button
              class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
              aria-label="Delete"
            >
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
        </td>
      </tr>


    </tbody>
  </table>
</div>
<div
  class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
>
  <span class="flex items-center col-span-3">
    Showing 21-30 of 100
  </span>
  <span class="col-span-2"></span>
  <!-- Pagination -->
  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
    <nav aria-label="Table navigation">
      <ul class="inline-flex items-center">
        <li>
          <button
            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
            aria-label="Previous"
          >
            <svg
              class="w-4 h-4 fill-current"
              aria-hidden="true"
              viewBox="0 0 20 20"
            >
              <path
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            1
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            2
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            3
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            4
          </button>
        </li>
        <li>
          <span class="px-3 py-1">...</span>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            8
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            9
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
            aria-label="Next"
          >
            <svg
              class="w-4 h-4 fill-current"
              aria-hidden="true"
              viewBox="0 0 20 20"
            >
              <path
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </li>
      </ul>
    </nav>
  </span>
</div>
</div>
@endsection