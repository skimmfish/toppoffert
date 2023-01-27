@extends('layouts.admin_app_elite')
@section('content')

@include('layouts.admin_topbar')


<div class="row m-3">
<h1>Hej! {{\Auth::user()->f_name}}</h1>
<p class="line-height-auto">Se alla dina aviseringar och administrativa loggar på ett ställe</p>

<!--table section for all users-->
@php $id=1; @endphp

@if(sizeof($logs)>0)

<div class="card mb-12 btn-reveal-trigger" id="dataFilter">	   

<div class="scrollable_table">
	    <table id="example" class="table table-responsive table-bordered table-stripped table_rws" style="color:#000 !important;padding:20px 4px 5px 5px !important;">
		<thead>	
        <tr>
                <th>S/N</th>
                <th>Subject</th>
                <th>Sent By</th>
                <th>Body</th>
                <th>Date</th>
                <th>Handling</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logs as $x)

            <tr>
            <td>{{$id++}}</td>
            <td>{{$x->subject}}</td>
            
            <td>@if($x->sender_id!=NULL) {{ \App\Models\User::get_data('f_name',$x->sender_id)}} @endif </td>
            <td>{{$x->note}}</td>
            <td>{{ date('D, M Y',strtotime($x->created_at)) }}</td>
            <td>
                @if($type=='notifications')
            <a href="#" id="replyNotice" class="text-primary underline" data-target="#requestModal" data-toggle="modal" data-attr="{{route('send_message',['id'=>$x->id,'email'=>$x->reply_email,'subject'=>$x->subject])}}">Reply</a>
                @endif
<Br/>
                <a href="#" title="Delete" data-attr="{{route('delete_msg_confirmation',['id'=>$x->id,'type'=>$type])}}" data-target="#requestModal" data-toggle="modal" class="text-danger">Radera</a>
            </td>
            <td>
            <!--actions-->

            </td>                
            </tr>

            </tbody>

            @endforeach

</table>
</div>
</div>
@else

<div class="row"><span class="underline">Nej! Meddelande i detta utrymme!</span></div>
@endif
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

</div>
@endsection