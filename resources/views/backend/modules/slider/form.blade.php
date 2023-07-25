{!! Form::label('title', 'Title') !!}
{!! Form::text('title', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter title']) !!}

{!! Form::label('description', 'Description', ['class' => 'mt-4']) !!}
{!! Form::text('description', null, [
    'class' => 'form-control form-control-sm',
    'placeholder' => 'Enter description',
]) !!}
{!! Form::label('sliders', 'Photo', ['class' => 'mt-4']) !!}
{!! Form::file('photo', ['class' => 'up-photo form-control form-control-sm']) !!}
<div class="row">
    <div class="col-lg-6">
        <div class="show-photo mt-3" style="display: none">
            <img class="show_photo" alt="">
        </div>
    </div>
    <div class="col-lg-6"></div>
</div>


@push('script')
    <script>
        $('.up-photo').on('change', function(e) {
            let photo = e.target.files[0]
            photo = URL.createObjectURL(photo)
            $('.show_photo').attr('src', photo)
            $('.show-photo').show()
        })
    </script>
@endpush
