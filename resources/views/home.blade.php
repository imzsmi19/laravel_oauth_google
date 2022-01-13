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

                        <form method="POST" action="{{ url('encrypt') }}">
                            @csrf
                            <div class="row mb-3 mt-3">
                                <label for="encrypt_text"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Text to Encrypt') }}</label>

                                <div class="col-md-6">
                                    <input id="encrypt_text" type="text"
                                        class="form-control @error('encrypt_text') is-invalid @enderror" name="encrypt_text"
                                        value="{{ old('encrypt_text') }}" required autofocus>

                                    @error('encrypt_text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2 mb-5">
                                    <button type="submit" class="btn btn-block btn-success">Encrypt</button>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ url('decrypt') }}">
                            @csrf
                            <div class="row mt-3 mb-3">
                                <label for="decrypt_text"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Text to Decrypt') }}</label>

                                <div class="col-md-6">
                                    <input id="decrypt_text" type="text"
                                        class="form-control @error('decrypt_text') is-invalid @enderror" name="decrypt_text"
                                        value="{{ old('encrypt_text') }}" required>

                                    @error('decrypt_text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-block btn-success">Decrypt</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
