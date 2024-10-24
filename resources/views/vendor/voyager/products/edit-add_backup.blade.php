@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
    $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};

    // Fetch data for brands and product categories
    $brands = \App\Brand::all();  // Assuming Brand model is located in App\Models
    $productCategories = \App\ProductCategory::all();  // Assuming ProductCategory model is in App\Models
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .custom_img img{
            height: 150px !important;
            width:  150px !important;
        }
        body {
            font-size: 20px !important;
            color: black !important;
            font-weight: bold !important;
        }

        label{
            color:#22A7F0 !important;
            font-size: 20px !important;
            font-weight: bold !important;
        }

        .copy-text button:active {
            background: #809ce2;
        }
        .copy-text button:before {
            content: "Copied";
            position: absolute;
            top: -45px;
            right: 0px;
            background: #5c81dc;
            padding: 8px 10px;
            border-radius: 20px;
            font-size: 15px;
            display: none;
        }
        .copy-text button:after {
            content: "";
            position: absolute;
            top: -20px;
            right: 25px;
            width: 10px;
            height: 10px;
            background: #5c81dc;
            transform: rotate(45deg);
            display: none;
        }
        .copy-text.active button:before,
        .copy-text.active button:after {
            display: block;
        }
    </style>
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @php
                                $nameField = $dataTypeRows->where('field', 'name')->first();
                                $priceField = $dataTypeRows->where('field', 'price')->first();
                                $codeField = $dataTypeRows->where('field', 'code')->first();

                                do {
                                    // Generate a random 6-character alphanumeric code (mix of letters and digits)
                                    $productCode = Str::upper(Str::random(6));
                                }while (\App\Product::where('code', $productCode)->exists());

                                // Generate a random product code if the field is empty
                                if (empty($dataTypeContent->{$codeField->field})) {
                                    $dataTypeContent->{$codeField->field} = '#'.$productCode; // Generate a 6-character product code
                                }

                                $descriptionField = $dataTypeRows->where('field', 'description')->first();
                                $specificationsField = $dataTypeRows->where('field', 'specifications')->first();
                                $imagesField = $dataTypeRows->where('field', 'images')->first();
                                $stockField = $dataTypeRows->where('field', 'stock')->first();
                                $oldPriceField = $dataTypeRows->where('field', 'old_price')->first();
                            @endphp

                            <!-- Row for Name, Price, Code -->
                            <div class="row">
                                @if($nameField)
                                <div class="form-group col-md-4">
                                    <label>{{ $nameField->getTranslatedAttribute('display_name') }} :</label>
                                    {!! app('voyager')->formField($nameField, $dataType, $dataTypeContent) !!}
                                    @include('voyager::multilingual.input-hidden', ['isModelTranslatable' => $dataTypeContent->isTranslatable()])
                                </div>
                                @endif

                                @if($priceField)
                                <div class="form-group col-md-4">
                                    <label>{{ $priceField->getTranslatedAttribute('display_name') }} :</label>
                                    {!! app('voyager')->formField($priceField, $dataType, $dataTypeContent) !!}
                                    @include('voyager::multilingual.input-hidden', ['isModelTranslatable' => $dataTypeContent->isTranslatable()])
                                </div>
                                @endif

                                @if($codeField)
                                <div class="form-group col-md-4 copy-text" style="position: relative;">
                                    <label>{{ $codeField->getTranslatedAttribute('display_name') }} :</label>
                                    <div style="position: relative;">
                                        {!! app('voyager')->formField($codeField, $dataType, $dataTypeContent) !!}
                                        <button style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: none;">
                                            <i class="fa fa-clone" style="color: blue;"></i>
                                        </button>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <!-- Row for Description, Specifications -->
                            <div class="row">
                                @if($descriptionField)
                                <div class="form-group col-md-6">
                                    <label>{{ $descriptionField->getTranslatedAttribute('display_name') }} :</label>
                                    {!! app('voyager')->formField($descriptionField, $dataType, $dataTypeContent) !!}
                                    @include('voyager::multilingual.input-hidden', ['isModelTranslatable' => $dataTypeContent->isTranslatable()])
                                </div>
                                @endif

                                @if($specificationsField)
                                <div class="form-group col-md-6">
                                    <label>{{ $specificationsField->getTranslatedAttribute('display_name') }} :</label>
                                    {!! app('voyager')->formField($specificationsField, $dataType, $dataTypeContent) !!}
                                    @include('voyager::multilingual.input-hidden', ['isModelTranslatable' => $dataTypeContent->isTranslatable()])
                                </div>
                                @endif
                            </div>

                            <!-- Row for Brand, Product Category, Stock, Old Price -->
                            <div class="row">
                                <!-- Dropdown for Brand -->
                                <div class="form-group col-md-3">
                                    <label for="brand_id">Brand :</label>
                                    <select class="form-control" name="brand_id" id="brand_id">
                                        <option value="">-- Select Brand --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ (isset($dataTypeContent->brand_id) && $dataTypeContent->brand_id == $brand->id) ? 'selected' : '' }}>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Dropdown for Product Category -->
                                <div class="form-group col-md-3">
                                    <label for="productCategory_id">Product Category :</label>
                                    <select class="form-control" name="productCategory_id" id="productCategory_id">
                                        <option value="">-- Select Product Category --</option>
                                        @foreach($productCategories as $category)
                                            <option value="{{ $category->id }}" {{ (isset($dataTypeContent->productCategory_id) && $dataTypeContent->productCategory_id == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Stock Field -->
                                <div class="form-group col-md-3">
                                    <label>{{ $stockField->getTranslatedAttribute('display_name') }} :</label>
                                    {!! app('voyager')->formField($stockField, $dataType, $dataTypeContent) !!}
                                    @include('voyager::multilingual.input-hidden', ['isModelTranslatable' => $dataTypeContent->isTranslatable()])
                                </div>

                                <!-- Old Price Field -->
                                <div class="form-group col-md-3">
                                    <label>{{ $oldPriceField->getTranslatedAttribute('display_name') }} :</label>
                                    {!! app('voyager')->formField($oldPriceField, $dataType, $dataTypeContent) !!}
                                    @include('voyager::multilingual.input-hidden', ['isModelTranslatable' => $dataTypeContent->isTranslatable()])
                                </div>
                            </div>

                            <!-- Row for Images -->
                            <div class="row">
                                @if($imagesField)
                                <div class="form-group col-md-12 custom_img">
                                    <label>{{ $imagesField->getTranslatedAttribute('display_name') }} :</label>
                                    {!! app('voyager')->formField($imagesField, $dataType, $dataTypeContent) !!}
                                    @include('voyager::multilingual.input-hidden', ['isModelTranslatable' => $dataTypeContent->isTranslatable()])
                                </div>
                                @endif
                            </div>

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        </div>
                    </form>

                    <div style="display:none">
                        <input type="hidden" id="upload_url" value="{{ route('voyager.upload') }}">
                        <input type="hidden" id="upload_type_slug" value="{{ $dataType->slug }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
                slug:   '{{ $dataType->slug }}',
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let copyText = document.querySelector(".copy-text");

            if (copyText) {
                copyText.querySelector("button").addEventListener("click", function (e) {
                    e.preventDefault();

                    let input = copyText.querySelector("input[name='code']");

                    if (input && (input.tagName === 'INPUT' || input.tagName === 'TEXTAREA')) {
                        input.select();
                        document.execCommand("copy");
                        copyText.classList.add("active");
                        window.getSelection().removeAllRanges();

                        setTimeout(function () {
                            copyText.classList.remove("active");
                        }, 2500);
                    } else {
                        console.error("Input element not found or is not a valid input/textarea.");
                    }
                });
            } else {
                console.error("Copy text container not found.");
            }
        });
    </script>
@stop
