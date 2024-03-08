<x-app-layout>
    <div class="relative w-full flex flex-col items-center pt-10">  
        <div class="px-4 w-full max-w-[700px]">
            <div class="relative">
                <div class="w-full">
                    <h1 class=" w-full mb-5 text-4xl">Docket Summary</h1>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Occurrence</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dockets as $docket)
                            <tr>
                                <th>{{ $docket->id }}</th>
                                <td>{{ $docket->subject }}</td>
                                <td>{{ $docket->occurrence }}</td>
                            </tr>
                        @endforeach
                        
                    
                    </tbody>
                </table>
            </div>

        </div>    
    </div>
</x-app-layout>
