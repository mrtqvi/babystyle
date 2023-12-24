@extends('admin.layouts.app', ['title' => 'ایجاد صفحه'])

@section('content')
    <ul class="breadcrumb breadcrumb-arrow">
        <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.market.pages.index') }}">صفحه ها</a></li>
        <li class="breadcrumb-item active">ایحاد صفحه </li>
    </ul>

    <!-- .nk-block-head-content -->
    <div class="nk-block-between mb-4 mt-2">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">ایجاد صفحه </h3>
        </div>
        <!-- .nk-block-head-content -->
        <a href="{{ route('admin.market.pages.index') }}" class="btn btn-success">بازگشت</a>

        <!-- .nk-block-head-content -->
    </div>



    <div class="card">
        <div class="card-inner">
            <form action="{{ route('admin.market.pages.store') }}" method="post" enctype="multipart/form-data"
                id="form" class="form-validate" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-full-name">عنوان صفحه</label>
                            <span class="text-danger">*</span>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-full-name" placeholder="مثال : صفحه درباره ما" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            @error('title')
                                <span class="alert_required text-danger xl-1 p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group ">
                            <label class="form-label" for="fv-full-name">وضعیت</label>
                            <div class="form-control-wrap">
                                <div class="custom-control custom-control-lg custom-switch">
                                    <input type="checkbox" name="is_active" value="1"
                                        class="custom-control-input" @checked(old('is_active')) id="is_active">
                                    <label class="custom-control-label" for="is_active">فعال</label>
                                </div>
                            </div>
                            @error('is_active')
                                <span class="alert_required text-danger xl-1 p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div> 
                    <div class="form-group col-md-12 mt-2">
                        <label class="form-label" for="customFileLabel">تگ ها</label>
                        <span class="text-danger">*</span>
                        <input type="hidden" class="form-control form-control-sm" name="tags" id="tags"
                            value="{{ old('tags') }}">
                        <select class="select2 form-control form-control-sm" id="select_tags" multiple>

                        </select>
                        @error('tags')
                            <span class="alert_required text-danger xl-1 p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="px-3">
                        <label class="form-label" for="customFileLabel">محتوای صفحه</label>
                        <span class="text-danger">*</span>
                        <textarea name="content" class="tinymce-toolbar form-control">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="alert_required text-danger xl-1 p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">ذخیره اطلاعات</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var tags_input = $('#tags');
            var select_tags = $('#select_tags');
            var default_tags = tags_input.val();
            var default_data = null;

            if (tags_input.val() !== null && tags_input.val().length > 0) {
                default_data = default_tags.split(',');
            }

            select_tags.select2({
                placeholder: 'لطفا تگ های خود را وارد نمایید',
                tags: true,
                data: default_data,
                dir: 'rtl'

            });
            select_tags.children('option').attr('selected', true).trigger('change');
            $('#form').submit(function(event) {
                if (select_tags.val() !== null && select_tags.val().length > 0) {
                    var selectedSource = select_tags.val().join(',');
                    tags_input.val(selectedSource)
                }
            })
        })
    </script>
@endsection
