<div
    x-data="{ message: '', show: false, type: '' }"
    x-on:notify.window="
        message = $event.detail.message;
        type = $event.detail.type;
        show = true;
        setTimeout(() => show = false, 5000);
    "
    class="p-4 bg-white rounded shadow"
>
    <h2 class="text-xl font-bold mb-4">გატანის მოთხოვნა</h2>

    <!-- შეტყობინება -->
    <div
        x-show="show"
        x-text="message"
        :class="{
            'text-success font-semibold': type === 'success',
            'text-danger font-semibold': type === 'error'
        }"
        class="mb-2"
        x-transition
    ></div>

    <p class="mb-2">ბალანსი: <strong>{{ number_format($user->available_balance, 2) }} ₾</strong></p>

    <button
        wire:click="request"
        class="px-4 py-2 btn bg-gradient-dark mb-0 hover:bg-blue-700"
    >
        თანხის გატანა
    </button>
</div>
