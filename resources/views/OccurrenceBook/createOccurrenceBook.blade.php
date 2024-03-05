<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold sm:rounded-lg p-6 bg-green-700 text-xl text-white leading-tight">
            {{ __('Daily Occurrence Report') }}
        </h2>
    </x-slot>

    <form action="create-occurrence-book.store" method="POST" class="text-gray-800 space-y-6">
        @csrf
       
        <div class="py-8 bg-gray-300 sm:rounded-lg p-6 leading-tight">   
            <div class="text-gray-900">
                <h2 class="text-lg font-semibold leading-6 mb-4">Personal Information</h2>
                <h1 class="text-gray-900 text-lg font-semibold leading-6 mb-4"> <a href="createOccurrenceBook.blade.php">View Occurrence </a> </h1>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <x-input-label for="shift" :value="__('Shift')" class="text-lg font-bold text-gray-700" />
                        <x-text-input id="shift" class="block mx-auto mt-1 w-full sm:w-2/3" type="text" name="shift"
                            :value="old('shift')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('shift')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div>
                        <x-input-label for="ref" :value="__('Ref')" class="text-lg font-bold text-gray-700" />
                        <x-text-input id="ref" class="block mx-auto mt-1 w-full sm:w-2/3" type="text" name="ref"
                            :value="old('ref')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('ref')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div>
                        <x-input-label for="datetime" :value="__('Date and Time')" class="text-lg font-bold text-gray-700" />
                        <input id="datetime" class="block mx-auto mt-1 w-full sm:w-2/3" type="datetime-local" name="datetime" :value="old('datetime')" required autofocus />
                        <x-input-error :messages="$errors->get('datetime')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div>
                        <x-input-label for="subject" :value="__('Subject')" class="text-lg font-bold text-gray-700" />
                        <x-text-input id="subject" class="block mx-auto mt-1 w-full sm:w-2/3" type="text" name="subject"
                            :value="old('subject')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('subject')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div>
                        <x-input-label for="officer" :value="__('Officer')" class="text-lg font-bold text-gray-700" />
                        <x-text-input id="officer" class="block mx-auto mt-1 w-full sm:w-2/3" type="text" name="officer"
                            :value="old('officer')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('officer')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div>
                        <x-input-label for="entry" :value="__('Entry')" class="text-lg font-bold text-gray-700" />
                        <x-text-input id="entry" class="block mx-auto mt-1 w-full sm:w-2/3" type="text" name="entry"
                            :value="old('entry')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('entry')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div>
                        <x-input-label for="occurrence" :value="__('Occurrence')" class="text-lg font-bold text-gray-700" />
                        <x-text-input id="occurrence" class="block mx-auto mt-1 w-full sm:w-2/3" type="text" name="occurrence"
                            :value="old('occurrence')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('occurrence')" class="mt-2 focus:ring-orange-500" />
                    </div>
                </div>

                <button type="submit" class="w-full py-3 text-lg bg-orange-500 hover:bg-orange-600 rounded-md mt-6">Submit</button>
            </div>
        </div>
        
        @if ($errors->has('occurrence'))
            <div class="error text-danger">{{ $errors->first('occurrence') }}</div>
        @endif
    </form>
</x-app-layout>
