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


{!! Form::label('photo', 'Photo', ['class' => 'mt-4']) !!}
{!! Form::file('photo', ['class' => 'up-photo form-control form-control-sm']) !!}
@error('photo')
    <p class="position-absolute text-danger error-photo">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror
<div class="row mt-3">
    <div class="col-lg-6">
        <div class="show-photo" style="display: none">
            <img class="show_photo" alt="">
        </div>
    </div>
    @if (Route::currentRouteName() == 'notices.edit')
        <div class="col-lg-6">
            <div class="updated-img">
                <img src="{{ asset('image/uploads/notice/thumbnail/' . $notice->photo) }}" alt="">
            </div>
        </div>
    @endif

</div>


@push('script')
    <script>
        $('.up-photo').on('change', function(e) {
            let photo = e.target.files[0]
            photo = URL.createObjectURL(photo)
            $('.show_photo').attr('src', photo)
            $('.show-photo').show()
            $('.error-photo').empty()
        })
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
