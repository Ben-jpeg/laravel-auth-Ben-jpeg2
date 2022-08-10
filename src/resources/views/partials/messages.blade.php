@if (session()->has('success_message'))
    <div class="rounded-md bg-green-50 p-4">
      <p class="text-sm font-medium text-green-800">{{ session()->get('success_message') }}</p>
    </div>
@endif
@if (session()->has('warning_message'))
    <div class="alert alert-warning">
        <strong>{{ session()->get('warning_message') }}</strong>
    </div>
@endif
@if (session()->has('error_message'))
    <div class="rounded-md bg-red-50 p-4">
        <p class="text-sm font-medium text-red-800">{{ session()->get('error_message') }}</p>
    </div>
@endif
