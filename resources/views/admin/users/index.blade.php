<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar User Terdaftar</h1>

    <table class="min-w-full bg-white border border-gray-200 rounded shadow">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-3 border-b">#</th>
                <th class="p-3 border-b">Nama</th>
                <th class="p-3 border-b">Email</th>
                <th class="p-3 border-b">Role</th>
                <th class="p-3 border-b">Terdaftar Sejak</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr class="border-t hover:bg-gray-50">
                <td class="p-3">{{ $loop->iteration }}</td>
                <td class="p-3">{{ $user->name }}</td>
                <td class="p-3">{{ $user->email }}</td>
                <td class="p-3">{{ $user->role }}</td>
                <td class="p-3">{{ $user->created_at->format('d M Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-3 text-center text-gray-500">Belum ada user yang terdaftar.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>