@extends('layouts.app')

@section('title', 'Profile')

@section('content')
 <div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
  <div class="col-lg-12">
   <div class="text-center m-t-lg">
    
    
    <div class="container">
	   <div class="row">
    <div class="col-sm-9 col-md-11">
      <div class="panel panel-default">
       <div class="panel-heading"><h4>{{ __('Profile') }}</h4></div>
        <div class="panel-body">     
        <div class="box box-info">
        <div class="box-body">
          <div class="col-sm-6">
          <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
           <input id="profile-image-upload" class="hidden" type="file">
            <h3 style="font-weight: 100">Editar Perfil</h3>
             <div class="container text-left">
              <div class="row">
               <div class="col-sm-9 col-md-10 form-horizontal">
             {!! Form::open(['route' => ['profiles.update', $users->id], 'method' => 'PUT']) !!}
            
            	<div class="form-group">
            		{!! Form::label('name', 'Nombre',['class' =>'col-md-2','control-label'] ) !!}
            		{!! Form::text('name', $users->name, ['class' => 'form-control','placeholder' => $users->name]) !!}
            	</div>
            
            	<div class="form-group">
            		{!! Form::label('email', 'Correo Electronico',['class' =>'col-md-2','control-label']) !!}
            		{!! Form::email('email', $users->email, ['class' => 'form-control','placeholder' => $users->email ]) !!}
            	</div>
            
            	<div class="form-group">
            		{!! Form::label('password', 'Contraseña',['class' =>'col-md-2','control-label']) !!}
            		{!! Form::password('password', ['class' => 'form-control','placeholder' => '**********']) !!}
            	</div>
            	
            	<div class="form-group">
            		{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
            		<a class="navbar-right margin-link" href="{{ url('admin/profiles/show') }}"><p>{{ __('Profile_Volver') }}</p></a>
            	</div>
                <!-- /.box-body -->
                </div></div>              
              </div> 
            </div>
        </div>  
    </div>
</div>
    
   </div>
   </div>
  </div>
  </div>
 </div><br>
<br>
<br>
<br>
@endsection