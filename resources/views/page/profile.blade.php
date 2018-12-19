@extends('layouts.master')
@section('title','Mi Perfil')
@section('content')
<style>
.btn-grey{
    background-color:#D8D8D8;
	color:#FFF;
}
.rating-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px 15px 20px 15px;
	border-radius:3px;
}
.bold{
	font-weight:700;
}
.padding-bottom-7{
	padding-bottom:7px;
}

.review-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px;
	border-radius:3px;
	margin-bottom:15px;
}
.review-block-name{
	font-size:12px;
	margin:10px 0;
}
.review-block-date{
	font-size:12px;
}
.review-block-rate{
	font-size:13px;
	margin-bottom:15px;
}
.review-block-title{
	font-size:15px;
	font-weight:700;
	margin-bottom:10px;
}
.review-block-description{
	font-size:13px;
}
</style>
<div class="container bootstrap snippet">

    <div class="row">
      <div class="col-11 col-md-5">
        <div class="text-center">
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Cambiar avatar...</h6>
          <input type="file" class="text-center center-block file-upload">
        </div>
      </div>
      <div class="col-11 col-md-5"><h1>{{ Auth::user()->username}}</h1></div>
    </div>

    <div class="row">
  		<div class="col-10 col-md-3"><!--left col-->


      </hr><br>

          <ul class="list-group">
            <li class="list-group-item text-muted">Registros de trabajos <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Presupuestados</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Realizados</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Calificados</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Planificados</strong></span> 8</li>
          </ul>


        </div><!--/col-3-->
    	  <div class="col-8">
          <div class="row">

      			<div class="col-12 col-md-6">
      				<h4>Calificaciones de trabajos realizados</h4>

      				<div class="pull-left">
      					<div class="pull-left" style="width:35px; line-height:1;">
      						<div style="height:9px; margin:5px 0;">
                    5
                    <span class="glyphicon glyphicon-star"></span></div>
      					</div>
      					<div class="pull-left" style="width:380px;">
      						<div class="progress" style="height:9px; margin:8px 0;">
      						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"
                    aria-valuemin="0" aria-valuemax="5" style="width: 80%">
      							<span class="sr-only">80% Complete (danger)</span>
      						  </div>
      						</div>
      					</div>
      				</div>

      				<div class="pull-left">
      					<div class="pull-left" style="width:35px; line-height:1;">
      						<div style="height:9px; margin:5px 0;">
                    4
                    <span class="glyphicon glyphicon-star"></span></div>
      					</div>
      					<div class="pull-left" style="width:380px;">
      						<div class="progress" style="height:9px; margin:8px 0;">
      						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"
                    aria-valuemin="0" aria-valuemax="5" style="width: 60%">
      							<span class="sr-only">80% Complete (danger)</span>
      						  </div>
      						</div>
      					</div>
      				</div>

      				<div class="pull-left">
      					<div class="pull-left" style="width:35px; line-height:1;">
      						<div style="height:9px; margin:5px 0;">
                    3
                    <span class="glyphicon glyphicon-star"></span></div>
      					</div>
      					<div class="pull-left" style="width:380px;">
      						<div class="progress" style="height:9px; margin:8px 0;">
      						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"
                    aria-valuemin="0" aria-valuemax="5" style="width: 20%">
      							<span class="sr-only">80% Complete (danger)</span>
      						  </div>
      						</div>
      					</div>
      				</div>

      				<div class="pull-left">
      					<div class="pull-left" style="width:35px; line-height:1;">
      						<div style="height:9px; margin:5px 0;">
                    2
                    <span class="glyphicon glyphicon-star"></span></div>
      					</div>
      					<div class="pull-left" style="width:380px;">
      						<div class="progress" style="height:9px; margin:8px 0;">
      						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
                    aria-valuemin="0" aria-valuemax="5" style="width: 0%">
      							<span class="sr-only">80% Complete (danger)</span>
      						  </div>
      						</div>
      					</div>
      				</div>

      				<div class="pull-left">
      					<div class="pull-left" style="width:35px; line-height:1;">
      						<div style="height:9px; margin:5px 0;">
                    1
                    <span class="glyphicon glyphicon-star"></span></div>
      					</div>
      					<div class="pull-left" style="width:380px;">
      						<div class="progress" style="height:9px; margin:8px 0;">
      						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
                    aria-valuemin="0" aria-valuemax="5" style="width: 10%">
      							<span class="sr-only">80% Complete (danger)</span>
      						  </div>
      						</div>
      					</div>
      				</div>

      			</div>
            <div class="col-8 col-md-3 offset-2">
              <br>
      				<div class="rating-block">
      					<h4>Calificacion promedio</h4>
      					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
      					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
      					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      					</button>
      					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
      					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      					</button>
      					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
      					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      					</button>
      					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
      					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      					</button>
      					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
      					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      					</button>
      				</div>
      			</div>
      		</div>

      		<div class="row">
      			<div class="col-12 col-md-10">
      				<hr/>
      				<div class="review-block">
      					<div class="row">
      						<div class="col-3">
      							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
      							<div class="review-block-name"><a href="#">nktailor</a></div>
      							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
      						</div>
      						<div class="col-9">
      							<div class="review-block-rate">
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      							</div>
      							<div class="review-block-title">this was nice in buy</div>
      							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
      						</div>
      					</div>
      					<hr/>
      					<div class="row">
      						<div class="col-3">
      							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
      							<div class="review-block-name"><a href="#">nktailor</a></div>
      							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
      						</div>
      						<div class="col-9">
      							<div class="review-block-rate">
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      							</div>
      							<div class="review-block-title">this was nice in buy</div>
      							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
      						</div>
      					</div>
      					<hr/>
      					<div class="row">
      						<div class="col-3">
      							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
      							<div class="review-block-name"><a href="#">nktailor</a></div>
      							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
      						</div>
      						<div class="col-9">
      							<div class="review-block-rate">
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
      							</div>
      							<div class="review-block-title">this was nice in buy</div>
      							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
        </div> <!-- col-8 columna derecha-->
    </div><!--/row-->



<script>
$(document).ready(function() {


  var readURL = function(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('.avatar').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }


  $(".file-upload").on('change', function(){
      readURL(this);
  });
});
</script>


@endsection
