@props([
    'btnClass' => 'bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700',
    'btnValue' => 'Open Modal',
    'btnExitClass' => 'mt-4 text-red-500 hover:underline',
    'btnExitValue' => 'Cancel',
    'modalClass' => 'bg-white p-6 rounded-lg shadow-xl w-full max-w-md'
])

<div x-data="{ showModal: false }">
    <!-- Trigger Button -->
    <button @click="showModal = true" class="{{ $btnClass }}">
        {{ $btnValue }}
    </button>

    <!-- Modal Overlay with Blur -->
    <div
        x-cloak
        x-show="showModal"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 backdrop-blur-sm bg-transparent flex items-center justify-center z-50"
    >
        <!-- Modal Content -->
        <div
            x-cloak
            @click.outside="showModal = false"
            x-show="showModal"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="scale-95 opacity-0"
            x-transition:enter-end="scale-100 opacity-100"
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="scale-100 opacity-100"
            x-transition:leave-end="scale-95 opacity-0"
            class="{{ $modalClass }}"
        >
            {{ $slot }}

            
            <button @click="showModal = false" class="{{ $btnExitClass }}">
                {{ $btnExitValue }}
            </button>
            </div>
        </div>
    </div>
</div>
