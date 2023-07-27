{!! Form::label('title', 'Title') !!}
{!! Form::text('title', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter title']) !!}
@error('title')
    <p class="position-absolute text-danger">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror
{!! Form::label('description', 'Description', ['class' => 'mt-4']) !!}
{!! Form::textarea('description', null, [
    'class' => 'form-control form-control-sm',
    'id' => 'editor',
    'placeholder' => 'Enter description',
]) !!}

@error('description')
    <p class="position-absolute text-danger">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror

{!! Form::label('status', 'Status', ['class' => 'mt-4']) !!}
{!! Form::select('status', [1 => 'Active', 0 => 'Inactive'], null, [
    'class' => 'form-select form-select-sm',
    'placeholder' => 'Select service status',
]) !!}

@error('status')
    <p class="position-absolute text-danger">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror

@push('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
