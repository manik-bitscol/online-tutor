<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Job Tutor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @stack('css')
    <link rel="stylesheet" href="{{ asset('/assets/member/css/style.css') }}">

</head>

<body>

    {{-- Header Section --}}

    @includeIf('frontend.partials.header')

    <div class="row w-100">
        <div class="col-md-2">

            {{-- Sidebar --}}
            @includeIf('member.partials.sidebar')

        </div>
        <div class="col-md-10">

            {{-- Content section --}}
            @yield('content')

        </div>
    </div>


    {{-- Footer  Section --}}

    @includeIf('frontend.partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assets/member/lib/sweet-alert/sweetalert2@11.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('/assets/member/js') }}/main.js"></script>
</body>

</html>
