@extends('Layout.master',['title'=>'About'])
@section('contenair')
<div class="container">
 <div class="row">
     <div class="col-md-8 col-md-offset-4 col-sm-9 col-sm-offset-2">
        <h2>Get In Touch</h2>
           <p class="text-muted"> If you having trouble with this service, please 
               <a href="mailto:{{ config('laracarte.admin_support_email') }}"> ask for help</a>.</p>
      <form action="" method="POST">
          {{ csrf_field() }}
     <div class="form-group has-success">
         <label for="name" class="col-form-label">Name</label>
         <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
         {!!  $errors->first('name','<span class="help-block">:message</span>') !!}
     </div>
     <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
    </div>
      <div class="form-group">
            <label for="message" class="control-label sr-only">Message</label>
            <textarea class="form-control" rows="10" cols="10" name="message">{{ old('message') }}</textarea>
           {!! $errors->first('message','<span class="help-block">:message</span>') !!}
        </div>

            <div class="form-group">
                    
            <button type="submit" class="btn btn-primary btn-block">Envoyer le message &raquo;</button>
            </div>
         </form>


     </div>
 </div>


</div>
@endsection
