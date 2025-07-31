@extends('layouts.app')

@section('content')
    @auth
        <div class="sm:grid sm:grid-cols-3 sm:gap-10">
            <div class="sm:col-span-2">
                {{-- タスク作成 --}}
                @include('tasks.create')
                {{-- タスク一覧 --}}
                @include('tasks.index')
                {{-- タスク編集 --}}
                @include('tasks.edit')
                {{-- タスクステータス --}}
                @include('tasks.show')
            </div>
        </div>
    @else
        <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
            <div class="hero-content text-center my-10">
                <div class="max-w-md mb-10">
                    <h2>Welcome to the Tasklist</h2>
                    {{-- ユーザー登録ページへのリンク --}}
                    <a class="btn btn-neutral btn-lg" href="{{ route('register') }}">Sign up now!</a>
                </div>
            </div>
        </div>
    @endauth
@endsection