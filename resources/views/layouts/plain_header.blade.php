<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@if($title) {{ $title }} @else Administratörens instrumentpanel @endif - {{config('app.name')}}</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logos/toppofferta_logo.svg') }} ">
    <link rel="icon" type="image/svg" sizes="32x32" href="{{ asset('img/logos/toppofferta_logo.svg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logos/toppofferta_logo.svg') }}">

    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">
    <link href="//db.onlinewebfonts.com/c/0aee6008b82cde991ec28387169bb13e?family=GD+Sherpa" rel="stylesheet" type="text/css"/>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Spartan:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--for local/dev testing-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style>
    
@font-face {font-family: "GD Sherpa Regular";
    src: url("{{asset('font/0aee6008b82cde991ec28387169bb13e.eot')}}"); /* IE9*/
    src: url("{{asset('/font/0aee6008b82cde991ec28387169bb13e.eot?#iefix')}}") format("embedded-opentype"), /* IE6-IE8 */
    url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff2')}}") format("woff2"), /* chrome、firefox */
    url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff')}}") format("woff"), /* chrome、firefox */
    url("{{asset('font/0aee6008b82cde991ec28387169bb13e.ttf')}}") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url("{{asset('font/0aee6008b82cde991ec28387169bb13e.svg#GD Sherpa Regular')}}") format("svg"); /* iOS 4.1- */
  }

body{
background:rgb(235, 238, 239) !important;
display:flex;justify-content:center;
font-family:'Spartan','GD Sherpa Regular';
}
.circl_img{
background:none;
}.cover_div{
display:flex;justify-content:center;flex-direction:column;
background:#fff;margin:40px;width:80%;padding:50px 50px;border-radius:10px;
}
.img-responsive{
width:80%;display:block;margin:auto;border-radius:20px;height:auto;
}
.preview_board{
}
.btn_proceed{
    display:block;margin:auto;
    color:#fff !important;width:auto;border-radius:10px;background:#0d2453;color:#000;
    padding:14px 34px;text-decoration:none;font-weight:600;width:250px;border:0 !important;
    justify-content:center;position:relative;top:10px;height:55px !important;font-family:Spartan,GD Sherpa Regular;
}
.btn_proceed svg{
    position:relative;top:0;
}.texts{font-size:30px;text-align:Center;font-family:'Spartan','GD Sherpa Regular';margin-top:11.5px;}

/*for business doc_viewer*/
.header_area{
background:#0d2453 ;
height:auto;padding-bottom:25px;
padding:0;margin:0;color:#fff;
}
.padded{
    padding:60px 0 40px 70px !important;
    line-height:32px;
}
.img_bg{
    background:url({{asset('img/cleaners.jpg')}});
    background-repeat:no-repeat;height:500px;width:100%;
    background-size:cover;border-radius:50px;transition: 0.5s ease;
    border-top-right:0 !important;position:relative;right:-45px;
}
h2,h3{
    font-family:'Spartan','GD Sherpa Regular' !important;font-size:35px;font-weight:700;
}
h3{
    font-size:24px;
}
.padded p span{
    font-family:'Spartan';font-size:13.5px;
}
.body{
    margin:50px 0;
    font-family:'Spartan','GD Sherpa Regular' !important;
    font-size:13.5px;
    font-weight:400;background:#fff !important;margin:0 !important;padding:90px 110px;
}
.form-label{
    font-family:'Spartan','GD Sherpa Regular';
}

.body h2{font-weight:400 !important;font-size:24px;line-height:34px; }
.body h4{font-size:21px;line-height:35px;font-weight:500;}

.sd_msg{
    display:flex;justify-content:center;
text-align:center;margin-top:-50px;
}
.btncs{
    background:#0099cc;border-radius:3px;width:80%;
}

.offert_details{
    padding:40px 20px;text-align:justify;
    display:flex;justify-content:center;
}

.accept_box{
    width:40%;
    display:block;margin:auto;margin-top:35px;
    justify-content:center !important;border-radius:15px;
    
    padding:20px 25px;border-radius:10px;
}
.text-center{text-align:center;}
.checkbox{
    width:30px;height:30;margin-right:15px;
}
.accept{text-transform:uppercase;padding:10px 15px;font-weight:700;font-size:10.5px;width:100%;
    background:#0d2453;color:#fff;border:0;
}

.info_box{
    width:60%;height:auto;
}

.info_line{
    display:flex;
    flex-direction:space-between;
    flex:1 1;
}

.info_line h6, .info_line ul > li, b{color:#000 !important;font-size:85% !important;font-family:'Spartan','GD Sherpa Regular' !important;}
b{
    font-weight:600;font-size:80%;
}
.bigx-md-bx{
    text-align:center;margin:30px 10px;
}
.info_line ul > li{
    font-style:italic;font-size:75% !important;
}
.resize_div{
    background:#f3f9fd !important;width:80%;display:block;margin:auto;margin-top:20px;
}
.categories_bx{

    display:flex;flex:1 1 1;flex-direction

}
.offertill{
    display:grid;
grid-template-columns:50% 50%;grid-gap:20px;
}
.offertill span{font-family:'Spartan','GD Sherpa Regular';font-weight:700;font-size:11.5px;}
.textarea, .dark_bg{
width:100% !important;border-radius:9px;font-family:inherit;font-size:12.5px;
}
.textarea{height:110px !important;resize:none;}
.dark_bg{
    background:#0d2453 !important;border-radius:4px;height:45px;border:0;
}
.categories_bx{
    padding:15px 20px;
}
/**For mobile designs */
@media(max-width:768px){
    .info_box{
        width:80%;
    }
    .accept_box{
    width:100%;
    }
}
@media(max-width:425px){
    .info_box{width:90%;
    padding:10px 17px;
}
.info_line b{
    font-size:11.5px !important;
}
}
</style>

<script>
        // display a modal (small modal)
        $(document).on('click', '#sendMessageAbbeh', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#requestModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
</script>

</head>
<body>


@yield('content')


  <!--modals-->
		<!-- view modal -->
        <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onClick="closeModal('#requestModal')" data-dismiss="modal" aria-label="Close"style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>