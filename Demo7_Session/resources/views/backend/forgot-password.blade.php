@extends('includes.adminLayout')

@section('main_content')
    <form action="{{route('name_passwordForgot')}}" method="post">
        <div id="wrap">
            <section class="bodymain" style="min-height:580px;">
                <aside class="middle-container">
                    <div class="admin-inr"><br>
                        @csrf
                        <div class="form-outer" style="margin-left:320px; width:500px;">
                            <h1>Change Password</h1>
                            <div class="contact-row">
                                <div class="name">Current Password</div>
                                <div class="txtfld-box">
                                    <input type="text" name="current_pass">
                                </div>
                                <div class="req-field"> This Field Required </div>
                            </div>
                            <div class="clear"></div>
                            <div class="contact-row">
                                <div class="name">New Password</div>
                                <div class="txtfld-box">
                                    <input type="text" name="new_pass">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="contact-row">
                                <div class="name">Confirm Password</div>
                                <div class="txtfld-box">
                                    <input type="password" name="confirm_pass">
                                </div>
                            </div>
                            <div class="clear">&nbsp;</div>
                            <div class="contact-row">
                                <div class="name" style="float:right; width:1px;">&nbsp;</div>
                                <div style="background:none; border:none; float:left;">
                                    <input type="submit" class="btn" name="change_pass" value="Change Password">
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="clear">&nbsp;</div>

                        <div class="clear"></div>
                    </div>
                </aside>
                <div class="clear"></div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </section>
        </div>
    </form>
    <div class="clear"></div>
@endsection
