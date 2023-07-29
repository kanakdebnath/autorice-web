{!! Form::label('name', 'Name') !!}
{!! Form::text('name', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter name']) !!}
@error('name')
    <p class="position-absolute text-danger">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror

{!! Form::label('phone', 'Phone', ['class' => 'mt-4']) !!}
{!! Form::text('phone', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter phone']) !!}
@error('phone')
    <p class="position-absolute text-danger">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror

{!! Form::label('details', 'Description', ['class' => 'mt-4']) !!}
{!! Form::textarea('details', null, [
    'class' => 'form-control form-control-sm',
    'id' => 'description',
]) !!}

@error('details')
    <p class="position-absolute text-danger">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror

{!! Form::label('fb_link', 'Facebook Link', ['class' => 'mt-4']) !!}
{!! Form::text('fb_link', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter name']) !!}
@error('fb_link')
    <p class="position-absolute text-danger">
        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
    </p>
@enderror

{!! Form::label('linkedin_link', 'Linkedin Link', ['class' => 'mt-4']) !!}
{!! Form::text('linkedin_link', null, [
    'class' => 'form-control form-control-sm',
    'placeholder' => 'Enter name',
]) !!}
@error('linkedin_link')
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
    @if (Route::currentRouteName() == 'communications.edit')
        <div class="col-lg-6">
            <div class="updated-img">
                <img src="{{ asset('image/uploads/communication/thumbnail/' . $communication->photo) }}" alt="">
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
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
