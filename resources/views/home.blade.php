@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <button
                        class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
                        @click="exampleModalShowing = true">
                        Show Modal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dados</div>

                <div class="card-body">
                    <laravel-vue-good-table data-url="/lvgt/data" config-url="/lvgt/config" theme="polar-bear"/>
                </div>
            </div>
        </div>
    </div>
</div>

<modal :showing="exampleModalShowing" @close="exampleModalShowing = false">
    <h2 class="text-xl font-bold text-gray-900">Example modal</h2>
    <p class="mb-6">This is example text passed through to the modal via a slot.</p>
    <button class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
        @click="exampleModalShowing = false">
        Close
    </button>
</modal>
@endsection