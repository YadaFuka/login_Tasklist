<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost text-xl" href="/">Tasklist</a></h1>
        </div>

        <div class="flex-none">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <ul class="menu hidden lg:menu-horizontal">
                    @include('commons.link_items')
                </ul>
                <ul class="menu lg:hidden">
                    <li>
                        <details class="dropdown dropdown-end">
                            <summary>
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Guest
                                @endauth
                            </summary>
                            <ul class="menu dropdown-content shadow rounded-t-none bg-base-100 w-52 p-2 link-neutral">
                                @include('commons.link_items')
                            </ul>
                        </details>
                    </li>
                </ul>
                {{-- <ul tabindex="0" class="menu lg:block lg:menu-horizontal"> --}}
                {{-- メッセージ作成ページへのリンク --}}
                {{-- <li><a class="link link-hover" href="{{ route('tasks.create') }}">新規タスク登録</a></li>
                </ul> --}}
            </form>
        </div>
    </nav>
</header>