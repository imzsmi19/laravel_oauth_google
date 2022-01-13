@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Result of Decryption') }}</div>

                    <div class="card-body">
                        <div class="row mb-3 mt-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Encrypted Text : ') }}</label>
                            <div class="col-md-8">
                                <label class="col-md-10 col-form-label">{{ $encrypted }}</label>
                            </div>
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Decrypted Text : ') }}</label>
                            <div class="col-md-8">
                                <label class="col-md-10 col-form-label text-md-end">{{ $decrypted }}</label>
                            </div>
                        </div>
                        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
