@section('css')
    <!-- summernotes CSS -->
    <link href="{{ asset('admin/vendor/summernote/dist/summernote.css') }}" rel="stylesheet" />
@endsection

<div class="form-group">
    {!! Form::label('title', 'Título: *', ['class' => 'col-md-12']) !!}
    <div class="col-md-12">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('content', 'Conteúdo: *', ['class' => 'col-md-12']) !!}
    <div class="col-md-12">
        {!! Form::textarea('content', null, ['class' => 'form-control summernote', 'placeholder' => 'Conteúdo', 'rows' => 6]) !!}
    </div>
</div>

<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">{{ $submitButton }}</button>
<a href="{{ url('services') }}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>

@section('scripts')
    <!-- summernote -->
    <script src="{{ asset('admin/vendor/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/summernote/lang/summernote-pt-BR.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 350, // set editor height
                lang: 'pt-BR',
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection
