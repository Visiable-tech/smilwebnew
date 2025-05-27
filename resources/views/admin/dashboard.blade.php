@include('admin.common.header')
<h1>Welcome, {{ auth()->user()->name }}</h1>
<a href="{{ route('logout') }}">Logout</a>
@include('admin.common.footer')
