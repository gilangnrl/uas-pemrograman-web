<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.public.component.head')
</head>

<body>
    <div class="container" style="min-height: 700px;">
        <div class="d-row" style="margin-top: 25px;">
            @include('layouts.public.component.header')

            @yield('content')

            @include('layouts.public.component.sidebar')
        </div>
    </div>
    @include('layouts.public.component.footer')
</body>
@include('layouts.public.component.script')

</html>
