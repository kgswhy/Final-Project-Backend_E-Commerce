@extends('admin.layout.template')
@section('page-title')
Add Product - E - Gerai
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
          <a href="{{ route('addproduct') }}" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium dark:text-gray-400 dark:hover:text-white">Add Product</a>
        </div>
      </li>
    
    </ol>
  </nav>
  <h4
                class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
              >
                Add New Product
              </h4>
              <div
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
              >
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Product Name</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Electronics" id="subcategory_name" name="subcategory_name"
                  />
                </label>

                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Product Price</span>
                  <input type="number"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="12" id="subcategory_name" name="subcategory_name"
                  />
                </label>
  
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Product Quantity</span>
                  <input type="number"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="1000" id="subcategory_name" name="subcategory_name"
                  />
                </label>

                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Product Short Description</span>
                    <input
                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      placeholder="Electronics" id="subcategory_name" name="subcategory_name"
                    />
                  </label>

                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Product Long Description</span>
                    <textarea class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="" id="" cols="30" rows="10"></textarea>
                  </label>

                  
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Select Category
                    </span>
                    <select
                      class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" id="category" name="category">
                      <option active>Open the select menu</option>
                      <option>One</option>
                      <option>Two</option>
                      <option>Three</option>
                    </select>
                  </label>

                  
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Select Sub Category
                    </span>
                    <select
                      class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" id="category" name="category">
                      <option active>Open the select menu</option>
                      <option>One</option>
                      <option>Two</option>
                      <option>Three</option>
                    </select>
                  </label>
                  
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            Upload Product Image
                        </span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="file_input" type="file">
                </label>

  
  
                <br>
                <div>
                  <button type="submit"
                    class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple fl">
                    Add Product
                  </button>
                </div>
  
  
@endsection