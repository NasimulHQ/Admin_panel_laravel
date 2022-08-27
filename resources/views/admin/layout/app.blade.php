<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>Admin Panel</title>

    <link href="{{asset('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap')}}" rel="stylesheet">

    @include('admin.layout.style')

   @include('admin.layout.scripts')
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        @include('admin.layout.nav')



        @include('admin.layout.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('heading')</h1>
                    {{-- <div class="ml-auto">
                        <a href="" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                    </div> --}}
                </div>
               


                @yield('main-content')


            </section>
        </div>

    </div>
</div>

@include('admin.layout.footer-script')

</body>
</html>