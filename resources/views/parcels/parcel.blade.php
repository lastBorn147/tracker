@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
        @if(count($errors) > 0)
                    @foreach($errors->all as $error)
                        <div class="alert alert-danger"><li>{{$error}}</li></div>
                    @endforeach
                @endif
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif
            <div class="panel panel-default">
                <div class="panel-heading">Parcel Upload</div>

                <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{url('/addparcel')}}"
                 enctype = "multipart/form-data" >
                        {{ csrf_field() }}

                        
                        <div class="form-group{{ $errors->has('tracking_id') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Tracking ID:</label>

                            <div class="col-md-6">
                                <input id="tracking_id" type="text" class="form-control" name="tracking_id"
                                 value="{{ old('tracking_id') }}" required autofocus>

                                @if ($errors->has('tracking_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->parcel('tracking_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('reciever_name') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Reciever Name</label>

                            <div class="col-md-6">
                                <input id="reciever_name" type="text" class="form-control" name="reciever_name"
                                 value="{{ old('reciever_name') }}" required autofocus>

                                @if ($errors->has('reciever_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reciever_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                            <div class="form-group{{ $errors->has('reciever_phonenumber') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Reciever Phone Number</label>

                            <div class="col-md-6">
                                <input id="reciever_phonenumber" type="number" class="form-control" 
                                name="reciever_phonenumber"
                                 value="{{ old('reciever_phonenumber') }}" required autofocus>

                                @if ($errors->has('reciever_phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reciever_phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                            <div class="form-group{{ $errors->has('reciever_address') ? ' has-error' : '' }}">
                            <label for="reciever_address" class="col-md-4 control-label">Reciever Address</label>

                            <div class="col-md-6">
                                <textarea id="reciever_address"  rows="2" type="text" class="form-control" 
                                name="reciever_address"
                                 value="{{ old('reciever_address') }}" required autofocus></textarea>

                                @if ($errors->has('reciever_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reciever_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('Shipment_fee') ? ' has-error' : '' }}">
                            <label for="Shipment_fee" class="col-md-4 control-label">Shipment Status:</label>
                            <div class="col-md-6">
                            <select  name="shipment_status" class="form-control">
                                <option value="PENDING">PENDING</option>
                                <option value="ON ROUTE">ON ROUTE</option>
                                    
                            </select>
                            @if ($errors->has('Shipment_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Shipment_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('sender_name') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Parcel Weight</label>

                            <div class="col-md-6">
                                <input id="parcel_weight" type="text" class="form-control" name="parcel_weight"
                                 value="{{ old('parcel_weight') }}" required autofocus>

                                @if ($errors->has('parcel_weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parcel_weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sender_name') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Parcel Content</label>

                            <div class="col-md-6">
                                <input id="parcel_content" type="text" class="form-control" name="parcel_content"
                                 value="{{ old('parcel_content') }}" required autofocus>

                                @if ($errors->has('parcel_content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parcel_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        




                            <div class="form-group{{ $errors->has('Shipment_fee') ? ' has-error' : '' }}">
                            <label for="Shipment_fee" class="col-md-4 control-label">Shipment Fee:</label>

                            <div class="col-md-6">
                                <input id="Shipment_fee"  rows="4" type="text" class="form-control" 
                                name="shipment_fee"
                                 value="{{ old('Shipment_fee') }}" required autofocus>
                                @if ($errors->has('Shipment_fee'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Shipment_fee') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group{{ $errors->has('current_location') ? ' has-error' : '' }}">
                            <label for="current_location" class="col-md-4 control-label">Current_Location:</label>

                            <div class="col-md-6">
                                <input id="current_location"  rows="4" type="text" class="form-control" 
                                name="current_location"
                                 value="{{ old('current_location') }}" required autofocus>

                                @if ($errors->has('current_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('sender_name') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Sender Name</label>

                            <div class="col-md-6">
                                <input id="sender_name" type="text" class="form-control" name="sender_name"
                                 value="{{ old('sender_name') }}" required autofocus>

                                @if ($errors->has('sender_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sender_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sender_location') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Sender Location</label>

                            <div class="col-md-6">
                                <input id="sender_location" type="text" class="form-control" name="sender_location"
                                 value="{{ old('sender_location') }}" required autofocus>

                                @if ($errors->has('sender_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sender_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           
                            <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Upload Parcel 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <script type="text/javascript">


                $(document).ready(function() {

                $(".btn-success").click(function(){ 
                    var html = $(".clone").html();
                    $(".increment").after(html);
                });

                $("body").on("click",".btn-danger",function(){ 
                    $(this).parents(".control-group").remove();
                });

                });

            </script>
            </div>
        </div>
    </div>
</div>
@endsection
