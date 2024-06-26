@extends('layouts.plain_header')
@section('content')

    <style>
        .flex-box{
            display:grid;grid-template-columns:20% 80%;grid-gap:10px;
            padding:40px 50px;
            position:relative;top:100% !important;
            position:relative;bottom:-100px;
        }
        .btn_r_circle{
            background:#fff;border-radius:40px;text-decoration:none;height:70px !important;padding:20px 25px;font-size:12px;
            width:auto;
            border:0;color:#000;font-weight:600;margin-top:15px;
        }
        .flex-box svg{
            position:relative;top:3px;
        }
    </style>


<div class="flex-box">

<svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 0C7.90405 0 4.5835 3.32056 4.5835 7.41667V8.33334C4.5835 10.5339 4.2847 12.4847 3.82936 13.8507C3.59994 14.539 3.34881 15.0238 3.11851 15.316C2.948 15.5324 2.84626 15.5761 2.82292 15.5834C2.27551 15.5891 1.8335 16.0346 1.8335 16.5833V16.7917C1.8335 17.344 2.28121 17.7917 2.8335 17.7917H21.1668C21.7191 17.7917 22.1668 17.344 22.1668 16.7917V16.5833C22.1668 16.0346 21.7248 15.5891 21.1774 15.5834C21.1541 15.5761 21.0523 15.5324 20.8818 15.316C20.6515 15.0238 20.4004 14.539 20.171 13.8507C19.7156 12.4847 19.4168 10.5339 19.4168 8.33334V7.41667C19.4168 3.32056 16.0963 0 12.0002 0ZM2.82044 15.5841C2.81863 15.5844 2.81773 15.5846 2.81774 15.5847C2.81774 15.5847 2.81812 15.5847 2.81886 15.5845C2.81928 15.5844 2.8198 15.5843 2.82044 15.5841ZM6.5835 7.41667C6.5835 4.42512 9.00862 2 12.0002 2C14.9917 2 17.4168 4.42512 17.4168 7.41667V8.33334C17.4168 10.6891 17.7336 12.8633 18.2736 14.4832C18.4305 14.9538 18.6124 15.3966 18.8219 15.7917H5.1784C5.38795 15.3966 5.56986 14.9538 5.72672 14.4832C6.26668 12.8633 6.5835 10.6891 6.5835 8.33334V7.41667Z" fill="#000000"/>
<path d="M10.0541 19.9054C9.72577 19.4613 9.09959 19.3675 8.65552 19.6959C8.21145 20.0242 8.11764 20.6504 8.446 21.0945C9.27811 22.2198 10.5352 22.9999 12.0001 22.9999C13.465 22.9999 14.722 22.2198 15.5541 21.0945C15.8825 20.6504 15.7887 20.0242 15.3446 19.6959C14.9005 19.3675 14.2744 19.4613 13.946 19.9054C13.4147 20.6239 12.7124 20.9999 12.0001 20.9999C11.2877 20.9999 10.5854 20.6239 10.0541 19.9054Z" fill="#000000"/>
</svg>


<div class="text"><h1>You are unauthorized to view this page</h1>
<span>

<a href="{{route('index')}}" 
class="text-black btn btn-white btn_r_circle" style="border-radius:40px;padding-top:27px;">
<svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> Tillbak
</a>

</span>
</div>


</div>

@endsection