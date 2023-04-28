@extends('includes.adminLayout')

@section('main_content')
    <div id="wrap">
        <section class="bodymain" style="min-height:540px;">
            <aside class="middle-container">
                <div class="clear" style="height:5px;"></div>
                <h1 style="margin:50px 0 0 270px; font-size:35px; color:#036d9a;">Welcome To Admin Panel</h1>
                <p class="text-success">
                    @if (session('success'))
                        <p class="text-success">{{ session('success') }}</p>
                    @else
                        <p class="text-danger">{{ session('') }}</p>
                    @endif
                </p>
            </aside>
            <div class="clear"></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </section>
    </div>
    <div class="clear"></div>
@endsection
