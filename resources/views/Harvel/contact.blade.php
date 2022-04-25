@extends('Master.Master')

@section('main')
    @include('Harvel.nav_bar')
    <style>
        section{
            text-align: center;
        }

        .login-form{
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: transparent;
            border-radius: 15px;
            margin-left: 600px;
        }
    </style>
    <br>
    <section class="bg-success py-5">
        <div class="container">
            <div>
                <div>
                    <h1>Contact Us !</h1>
                    <h3 style="text-align: center;">Some Contact Method of
                        <span id="W_Name1">Harvel Electric</span>
                    </h3>
                    <p style="text-align: left; ">
                        <br>
                        HARVEL ELECTRIC HEADQUARTERS | Số 2 Phạm Văn Bạch, Trung Kính, Hà Nội, Việt Nam
                        <br>
                        EMAIL : HarvelElec@Gmail.com
                        <br>
                        COLLABORATION INQUIRIES : Tue@Gmail.com
                        <br>
                        WHOLESALE INQUIRIES :  Vinh@Gmail.com
                        <br><br><br><br>
                        HOURS OF OPERATION
                        <br>
                        Monday - Friday // 9AM - 5PM
                        <br>
                        Saturday - Sunday // CLOSED

                    </p>
                    <p>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-sm-4" style="transform: translateX(25%)">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.223510150098!2d105.79114479610794!3d21.023740990808932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b329f68977%3A0x6ddf5ff1e829fc56!2sGreenwich%20Vi%E1%BB%87t%20Nam!5e0!3m2!1sen!2s!4v1650904818093!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-sm-6" style="transform: translateX(-25%)">
                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" rows="5" id="description" name="description" placeholder="Messages"></textarea>
                    </div>

                    <button style="transform: translateX(200%)" class="btn btn-success" type="submit">Let's Talk</button>
                </form>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section>
        @include('Harvel.footer')
    </section>
@endsection
