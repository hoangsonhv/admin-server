@extends("frontend.layout")
@section("main")

    <div class="container" >
        <div class="breadcrumb-text">
            <a href="{{url("/")}}" style="font-size: 17px"><i class="fa fa-home"></i> Home</a>
            <span style="font-size: 17px" >About Us</span>
        </div>
    </div>
    <div class="about-section">
        <h1>Who We Are</h1>
        <p>We are the ones who bring you the best benefits through good products. Our services always meet the requirements of quality and reputation is always on top</p>
        <p>We want everyone to know our products. Because our products always meet all the standards of customers.</p>
    </div>

    <div class="container">
        <h2 style="text-align:center;padding: 20px" >Our Team Members</h2>
        <div class="row" style="margin-bottom: 50px">
            <div class="column">
                <div class="card">
                    <img src="{{asset("upload/1626274045.jpg")}}" alt="Jane" style="width:100%">
                    <h2>Lò Văn Tèo</h2>
                    <p class="title">CEO & Founder</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset("upload/1626274045.jpg")}}" alt="Jane" style="width:100%">
                    <h2>Lò Văn Tèo</h2>
                    <p class="title">CEO & Founder</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset("upload/1626274045.jpg")}}" alt="Jane" style="width:100%">
                    <h2>Lò Văn Tèo</h2>
                    <p class="title">CEO & Founder</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset("upload/1626274045.jpg")}}" alt="Jane" style="width:100%">
                    <h2>Lò Văn Tèo</h2>
                    <p class="title">CEO & Founder</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{asset("upload/1626274045.jpg")}}" alt="Jane" style="width:100%">
                    <h2>Lò Văn Tèo</h2>
                    <p class="title">CEO & Founder</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
@endsection
