@extends('layout')

@section('head')
    {!! HTML::style('/packages/dropzone/dropzone.css') !!}
    {!! HTML::style('/custom/custom.css') !!}
@stop

@section('footer')
    {{--{!! HTML::script('/custom/settings.js') !!}--}}
    {!! HTML::script('/packages/dropzone/dropzone.js') !!}
    {!! HTML::script('/assets/js/dropzone-config.js') !!}
    {!! HTML::script('/custom/custom.js') !!}

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="width: 75%;margin-top: 35%;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body imageContent">

                </div>
            </div>

        </div>
    </div>

@stop

@section('content')
    <div>
    <div>
        <div class="col-md-12">
            <div class="jumbotron how-to-create" >

                {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}

                <div class="dz-message">

                </div>

                <div class="fallback">
                    <input name="file" id="fileUpload" type="file" multiple />
                </div>

                <div class="dropzone-previews" id="dropzonePreview"></div>
                <h4 style="text-align: center;color:#428bca;">Drop images in this area  <span class="glyphicon glyphicon-hand-down"></span></h4>

                {!! Form::close() !!}
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-primary" onclick="triggerMe('real-dropzone')">
                            <i class="fa fa-plus"></i>
                            Add Images
                        </button>
                        <button id='submitfiles' class='btn btn-primary'>
                            <i class="fa fa-cloud-upload"></i> Upload Images
                        </button>
                    </div>

                    <div class="col-lg-4">
                        <div class="upload-progress-bar" style="display: none">
                            <div class="col-md-10">
                            <span class="fileupload-process">
                              <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                  <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                              </div>
                            </span>
                            </div>
                            <div class="col-md-2">
                                <span class="label label-primary uploadedPercent"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="pull-right">
                            Total Size : <span class="label label-primary"><span id="photoSize">0</span> MB</span> |
                            Total files : <span class="label label-primary"><span id="photoCounter">0</span></span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

     <div id="preview-template" style="display: none;">
        <div class="dz-preview dz-file-preview">
            <div class="dz-filename text-center"><span data-dz-name=""></span></div>
            <div class="dz-image"><img data-dz-thumbnail="" data-imageUrl="" onclick="addImage(this)" data-toggle="modal" data-target="#myModal"></div>
            <div class="dz-size text-center"><span data-dz-size=""></span></div>

            <div class="dz-details"></div>
            <div class="dz-progress" style="margin-top: 30px;"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>

            <div class="dz-success-mark">

                {{--<i class="fa fa-check-circle"></i>--}}

                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <title>Check</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                    </g>
                </svg>

            </div>

            <div class="dz-error-mark">
                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <title>error</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                        </g>
                    </g>
                </svg>
            </div>

        </div>
    </div>
    <!-- End Dropzone Preview Template -->
    {!! Form::hidden('csrf-token', csrf_token(), ['id' => 'csrf-token']) !!}
    </div>
    {{--</div>--}}
@stop
