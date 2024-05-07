<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                   <h3 class="font-semibold pb-5">Edit a person: {{$person->firstname}} {{$person->lastname}}</h3>
                <form action="{{route('person.update', $person->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class=" grid grid-cols-1 sm:grid-cols-6 gap-6">
                    <span class="sm:col-span-3">
                        <label class="block" for="firstname">First Name</label>
                        <input class="block w-full" type="text" name="firstname" id="firstname" value="{{old('firstname', $person->firstname)}}">
                    </span>
                    <span class="sm:col-span-3">
                        <label class="block" for="lastname">Last Name</label>
                        <input class="block w-full" type="text" name="lastname" id="lastname" value="{{old('lastname', $person->lastname)}}">
                    </span>
                </div>

                <div class=" grid grid-cols-1 sm:grid-cols-6 gap-6">
                    <span class="sm:col-span-3">
                        <label class="block" for="email">Email</label>
                        <input class="block w-full" type="text" name="email" id="email" value="{{old('email', $person->email)}}">
                    </span>
                    <span class="sm:col-span-3">
                        <label class="block" for="phone">Phone</label>
                        <input class="block w-full" type="text" name="phone" id="phone" value="{{old('phone', $person->phone)}}">
                    </span>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{route('person.index')}}">Cancel</a>
                    <button class="bg-blue-600 text-white px-3 py-2 rounded-full" type="submit">Save</button>
                </div>

                </form> 

                <form action="{{route('person.destroy', $person->id)}}" method="POST">
                @csrf
                @method('DELETE')

                <div class="bg-red-600 mt-6 p-6"><h3>Delete here</h3>
                <button type="submit">Delete</button>
                </div>
                </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
