@extends('layouts.app')

@section('content')
    <div x-data="handle()">
        <h1 class="text-4xl text-gray-500 mb-4">Welcome to Laravel Tailpine</h1>
        <button @click="loginClick()" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">
          Go to Login Page (via Alpine)
        </button>
    </div>
    @push('scripts')
    <script type="text/javascript">
        function handle() {
            return {
                loginClick() {
                     window.location.href = "/home";
                }
            }
        }
    </script>
    @endpush
@endsection
