

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center text-3xl font-bold bg-gray-200 text-green-700 p-4 mb-4 rounded">Security Services Department Occurrence Book</h1>
    <table boarder ="2"class="w-full border-2 border-gray-400 rounded shadow-md">
        <thead class="bg-gray-300">
            <tr>
                <th class="text-left px-4 py-2 font-medium">ref</th>
                <th class="text-left px-4 py-2 font-medium">shift</th>
                <th class="text-left px-4 py-2 font-medium">datetime</th>
                <th class="text-left px-4 py-2 font-medium">occurence</th>
                <th class="text-left px-4 py-2 font-medium">subject</th>
                <th class="text-left px-4 py-2 font-medium">officer</th>
                <th class="text-left px-4 py-2 font-medium">entry</th>
            </tr>
        </thead>
        <tbody>
        @foreach($occurrencebook as $data)
            <tr>
                <td class="text-left px-4 py-2">{{$data->subject}}</td>
                <td class="text-left px-4 py-2">{{$data->entry}}</td>
                <td class="text-left px-4 py-2">{{$data->ref}}</td>
                <td class="text-left px-4 py-2">{{$data->occurrence}}</td>
                <td class="text-left px-4 py-2">{{$data->officer}}</td>
                <td class="text-left px-4 py-2">{{$data->datetime}}</td>
                <td class="text-left px-4 py-2">{{$data->shift}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
