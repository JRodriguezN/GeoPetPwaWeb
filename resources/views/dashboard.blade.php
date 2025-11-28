<x-app-layout>
    <div class="min-h-screen bg-[{{ config('app.colors.background', '#F4EFEB') }}] py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6 lg:flex lg:items-center lg:justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="h-16 w-16 rounded-full bg-indigo-50 flex items-center justify-center">
                            <!-- simple paw icon -->
                            <svg class="h-8 w-8 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 13c-1.933 0-3.5 1.567-3.5 3.5S10.067 20 12 20s3.5-1.567 3.5-3.5S13.933 13 12 13zm6.5-6.5c0 1.933-1.567 3.5-3.5 3.5S11.5 8.433 11.5 6.5 13.067 3 15 3s3.5 1.567 3.5 3.5zM6.5 6.5C6.5 8.433 4.933 10 3 10S-0.5 8.433-0.5 6.5 1.067 3 3 3s3.5 1.567 3.5 3.5zM18 16.5c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-900">Bienvenido, {{ session('firebase_email', 'Usuario') }} 🎉</h2>
                            <p class="mt-1 text-sm text-gray-600">Aquí puedes administrar tus mascotas, reportes y notificaciones.</p>
                        </div>
                    </div>

                    <div class="mt-4 lg:mt-0 flex items-center space-x-3">
                        <a href="{{ url('/mis-mascotas') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md text-sm font-medium shadow-sm hover:bg-indigo-500">Mis mascotas</a>
                        <a href="" class="inline-flex items-center px-4 py-2 border border-gray-200 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Reportar pérdida</a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6 border-t bg-gray-50">
                    <div class="p-4 bg-white rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500">Mascotas publicadas</p>
                        <p class="mt-2 text-2xl font-bold text-gray-800">{{ $petsCount ?? '—' }}</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500">Reportes activos</p>
                        <p class="mt-2 text-2xl font-bold text-gray-800">{{ $reportsCount ?? '—' }}</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500">Mensajes</p>
                        <p class="mt-2 text-2xl font-bold text-gray-800">{{ $messagesCount ?? '—' }}</p>
                    </div>
                </div>

                <div class="p-6 border-t">
                    <h3 class="text-lg font-medium text-gray-900">Actividad reciente</h3>
                    <p class="mt-2 text-sm text-gray-600">Aquí verás las acciones recientes relacionadas con tus mascotas y reportes. Cuando haya actividad, aparecerá en esta sección.</p>
                    <div class="mt-4">
                        <ul class="space-y-2">
                            <li class="p-3 bg-white rounded-md border">No hay actividad reciente — empieza publicando una mascota.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
