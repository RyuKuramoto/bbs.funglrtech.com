@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="username">
                            投稿者名
                        </label>
                        <input
                            id="username"
                            name="username"
                            class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
                            value="{{ old('username') }}"
                            type="text"
                        >
                        @if ($errors->has('username'))
                            <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value="{{ old('title') }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>
                        <textarea
                            id="body"
                            name="body"
                            class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                            rows="4"
                        >
                            {{ old('body') }}
                        </textarea>
                        @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">
                            メールアドレス
                        </label>
                        <input
                            id="email"
                            name="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                            value="{{ old('emsil') }}"
                            type="text"
                        >
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="url">
                            URL
                        </label>
                        <input
                            id="url"
                            name="url"
                            class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}"
                            value="{{ old('url') }}"
                            type="text"
                        >
                        @if ($errors->has('url'))
                            <div class="invalid-feedback">
                                {{ $errors->first('url') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('top') }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection