<x-app-layout>
  
  
    <form action="/docket" method="POST" >
        @csrf        
        <div class="relative w-full flex flex-col items-center">  

            <div class="px-4 w-full max-w-[700px]">
                <div class="mt-10 grid grid-rows-1 gap-4 w-full ">    
                    <div class="relative">
                        <div class="w-full">
                            <h1 class=" w-full mb-5 text-4xl">Create Docket</h1>
                        </div>
                    </div>
                    <!-- Officer -->
                    <div class="relative">
                        <x-text-input  id="subject" class="block mt-1 w-full" type="text" name="subject" required autocomplete="off" />
                        <x-input-label for="subject"  :value="__('Subject')"  />
                        <x-input-error :messages="$errors->get('shift')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <x-text-input  id="occurrence" class="block mt-1 w-full" type="text" name="occurrence" required autocomplete="off" />
                        <x-input-label for="occurrence"  :value="__('Occurrence')"  />
                        <x-input-error :messages="$errors->get('shift')" class="mt-2 focus:ring-orange-500" />
                    </div>

                    <div class="relative">
                        <button type="submit" class="w-28 py-3 text-lg bg-orange-500 hover:bg-orange-600 rounded-md">Submit</button>
                    </div>

                    @if ($errors ->has ('occurrence'))
                        <div class="error text-danger">{{$errors->first('occurrence')}}</div>
                    @endif 
                </div>
    
            </div>    
        </div>
        
    </form>
</x-app-layout>
