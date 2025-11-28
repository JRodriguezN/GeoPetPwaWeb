<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">🐾 Mascotas Extraviadas</h2>
    </x-slot>

    <div class="container mx-auto px-6 py-8">
        <h1 class="text-center text-3xl font-semibold text-gray-700 mb-8">Mascotas Extraviadas</h1>

        @if(!empty($data))
            <div class="flex flex-wrap justify-center gap-8">
                @foreach ($data as $pet)
                    @php
                        $imageUrl = null;
                        if (!empty($pet['fotosMascota']['arrayValue']['values'])) {
                            $firstPhoto = $pet['fotosMascota']['arrayValue']['values'][0]['mapValue']['fields'] ?? null;
                            if (!empty($firstPhoto['uploadedUrl']['stringValue'])) {
                                $imageUrl = $firstPhoto['uploadedUrl']['stringValue'];
                            }
                        }
                    @endphp

                    <div class="flip-card w-72 h-96 cursor-pointer">
                        <div class="flip-card-inner">
                            <!-- Frente -->
                            <div class="flip-card-front bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-xl overflow-hidden">
                                @if ($imageUrl)
                                    <img src="{{ $imageUrl }}" alt="Mascota" class="w-full h-48 object-cover">
                                @else
                                    <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="Sin imagen"
                                         class="w-full h-48 object-cover bg-gray-200">
                                @endif
                                <div class="p-4 text-center text-black">
                                    <h3 class="text-xl font-semibold mb-1">{{ $pet['nombre']['stringValue'] ?? 'Sin nombre' }}</h3>
                                    <p class="text-sm opacity-90"><strong>Tipo:</strong> {{ $pet['tipo']['stringValue'] ?? 'Desconocido' }}</p>
                                    <p class="text-sm opacity-90"><strong>Raza:</strong> {{ $pet['raza']['stringValue'] ?? 'Desconocida' }}</p>
                                </div>
                            </div>

                            <!-- Reverso -->
                            <div class="flip-card-back rounded-xl shadow-xl flex flex-col justify-center items-center p-5" style="background-color: #F7D1D0; text: #2F4157;">
                                <h3 class="text-lg font-bold mb-2">Detalles</h3>
                                <p class="text-sm mb-1"><strong>Color:</strong> {{ $pet['color']['stringValue'] ?? 'No registrado' }}</p>
                                <p class="text-sm mb-1"><strong>Edad:</strong> {{ $pet['edad']['stringValue'] ?? 'Desconocida' }}</p>
                                <p class="text-sm mb-1"><strong>Ubicación:</strong> {{ $pet['ubicacion']['stringValue'] ?? 'No especificada' }}</p>
                                <p class="text-sm mt-3 italic opacity-80">Si la reconoces, contacta al dueño 🐾</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-400 mt-12">No hay mascotas extraviadas 🐶🐱</p>
        @endif
    </div>
</x-app-layout>

<script>
    // Guardar datos en localStorage
    localStorage.setItem('ultimasMascotas', JSON.stringify(@json($data)));
</script>

<style>
/* ======== ESTILO DE LAS FLIP CARDS ======== */
.flip-card {
    perspective: 1000px;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 1rem;
}

.flip-card-back {
    transform: rotateY(180deg);
}
</style>
