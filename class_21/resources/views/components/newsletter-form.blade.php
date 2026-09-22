<div style="padding: 20px; background: #f9f9f9; border: 1px solid #ddd; margin-top: 20px;">
    <h2>Subscribe to our Newsletter</h2>
    <form action="" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" required style="padding: 10px; width: 70%; margin-right: 10px;">
        <x-button>
            @section('button-text', 'Subscribe')
        </x-button>
    </form>
</div>