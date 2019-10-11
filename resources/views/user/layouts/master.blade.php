@include('user.layouts.header')
@yield('style')
<div class="o-page">
    <main class="o-page__content">
        <div class="container">


            @yield('content')


        </div>
    </main>
</div>
@include('user.layouts.footer')

