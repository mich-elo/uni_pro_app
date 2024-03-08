<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold sm:rounded-lg p-6 bg-green-700 text-xl text-white leading-tight">
            {{ __('Daily Occurrence Report') }}
        </h2>
    </x-slot> --}}

    <form action="create-occurrence-book.store" method="POST" >
        @csrf
       
        <div class="relative w-full flex flex-col items-center">

            <div class="px-4 w-full max-w-[700px]">
                <div class="mt-10 grid grid-rows-1 gap-4 w-full ">
                    <div class="relative">
                        <x-input-label for="shift" :value="__('Shift')"/>
                        <x-text-input 
                            id="shift" 
                            class="block mx-auto mt-1 w-full" 
                            type="text" name="shift"
                            :value="old('shift')" 
                            required 
                            autofocus 
                            autocomplete="off" 
                        />
                        <x-input-error :messages="$errors->get('shift')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <x-input-label for="ref" :value="__('Ref')"  />
                        <x-text-input id="ref" class="block mx-auto mt-1 w-full " type="text" name="ref"
                            :value="old('ref')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('ref')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <x-input-label for="datetime" :value="__('Date and Time')"  />
                        <input id="datetime" class="block mx-auto mt-1 w-full " type="datetime-local" name="datetime" :value="old('datetime')" required autofocus />
                        <x-input-error :messages="$errors->get('datetime')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <x-input-label for="subject" :value="__('Subject')"  />
                        <x-text-input id="subject" class="block mx-auto mt-1 w-full " type="text" name="subject"
                            :value="old('subject')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('subject')" class="mt-2 focus:ring-orange-500" />
                    </div class="relative">

                    <div class="relative">
                        <x-input-label for="officer" :value="__('Officer')"  />
                        <x-text-input id="officer" class="block mx-auto mt-1 w-full " type="text" name="officer"
                            :value="old('officer')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('officer')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <x-input-label for="entry" :value="__('Entry')" class="text-lg font-bold text-gray-700" />
                        <x-text-input id="entry" class="block mx-auto mt-1 w-full " type="text" name="entry"
                            :value="old('entry')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('entry')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <x-input-label for="occurrence" :value="__('Occurrence')"/>
                        <x-text-input 
                            id="occurrence" 
                            class="block mx-auto mt-1 w-full" 
                            type="text" 
                            name="occurrence"
                            :value="old('occurrence')" required autofocus autocomplete="off" 
                        />
                        <x-input-error :messages="$errors->get('occurrence')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <button type="submit" class="w-28 py-3 text-lg bg-orange-500 hover:bg-orange-600 rounded-md">Submit</button>
                    </div>
    
                    @if ($errors->has('occurrence'))
                        <div class="error text-danger">{{ $errors->first('occurrence') }}</div>
                    @endif

                </div>

            </div>
        </div>
        
    </form>
</x-app-layout>
