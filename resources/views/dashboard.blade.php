<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Start Calculations
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form method="post" action="/" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Number a
                </label>
                <input name="a" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="a">
                </div>
                <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                    Number b
                </label>
                <input name="b" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" placeholder="b">
                </div>
                <div class="inline-block relative w-64">
                    <select name="operation" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="+">Add</option>
                        <option value ="-"> Subtract</option>
                        <option value="*">Multiply</option>
                        <option value="/"> Divide</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                    </div>
                <div class="flex items-center justify-between">
                <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                </input>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
