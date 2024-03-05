<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold sm:rounded-lg p-6 bg-green-700 text-xl text-white leading-tight">
            {{ __('Daily Occurrence Report') }}
        </h2>
    </x-slot>

    
    <form action="/occurance" method="POST" class="text-white space-y-6">
        @csrf
        
        <div class="py-12 bg-gray-300 sm:rounded-lg p-6 text-gray-800 leading-tight">   
            <div class="p-6 text-gray-800">
                <h2 class="text-lg font-semibold leading-6 text-gray-900">Personal Information</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-8">
                   

                    <!-- Officer -->
                    <div class="sm:col-span-2">
                        <x-input-label for="shift" :value="__('Shift')" />
                        <x-text-input id="shift" class="block mt-1 w-full" type="text" name="shift"
                            :value="old('shift')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('shift')" class="mt-2 focus:ring-orange-500" />
                    </div>

                     <!-- Ref -->
                     <div class="sm:col-span-2">
                        <x-input-label for="ref" :value="__('Ref')" />
                        <x-text-input id="ref" class="block mt-1 w-full" type="text" name="ref"
                            :value="old('ref')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('ref')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <!-- Time -->
                    <div class="sm:col-span-2">
                        <x-input-label for="time" :value="__('Time')" />
                        <x-text-input id="time" class="block mt-1 w-full" type="text" name="time"
                            :value="old('time')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('time')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <!-- Subject -->
                    <div class="sm:col-span-2">
                        <x-input-label for="subject" :value="__('Subject')" />
                        <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject"
                            :value="old('subject')" required autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('subject')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <!-- Description -->
                   

                    <!-- Officer-->
                   
                   
                </div>

            

                <!-- Occurrence -->
               

                           <button type="submit" class="w-full py-3 text-lg bg-orange-500 hover:bg-orange-600 rounded-md">Submit</button>
    
                    </div>
                </div>
            </div>
        </div>
        @if ($errors ->has ('occurrence'))
    <div class="error text-danger">{{$errors->first('occurrence')}}</div>
@endif 
    </form>
</x-app-layout>
