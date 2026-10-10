<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(isset($balance))
                        <p>Your current balance is: ${{ number_format($balance->current_balance, 2) }}</p>
                    @else
                        <form method="POST" enctype="multipart/form-data" action="{{ route('balance.store') }}">
                            @csrf
                            @method('POST')
                            
                            <label for="balance">Enter your balance:</label>
                            <input type="number" id="balance" name="opening_balance" step="0.01" required>
                            <button type="submit">Submit</button>
                        </form>
                    @endif
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
