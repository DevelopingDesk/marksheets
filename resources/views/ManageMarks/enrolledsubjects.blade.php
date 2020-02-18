@extends('Dashboard/dashboard')

@section('content')

<div class="col_3">
        	@foreach($allsubjects as $sub)
         <a href="{{ route('all.students',[$sub->section_id,$sessionid,$sub->class_id,$sub->subject->id,]) }}">
            <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left   fa fa-credit-card icon-rounded"></i>
                    <div class="stats">
                    	
                      <span style="color:blue">Class={{$sub->schoolClass->name}}</span>
                     
                      <span style="color:green">Section={{$sub->section->name}}</span>
                      <span>Subject={{$sub->subject->name}}</span>
                    </div>
                </div>
                <br>
        	</div>
</a>
            @endforeach
        
        	<div class="clearfix"> </div>
      </div>
@endsection