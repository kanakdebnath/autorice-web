<a class="navbar-brand" href="{{ route('front.index') }}">

    <img style="width: 100%;" src="{{ asset('frontend/assets/images/Raipur-Auto-Rice-Mills.svg') }}"
        alt="Raipur Auto Rice Mills" />
</a>
<button input type="button" role="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav"
    aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div id="nav" class="navbar-collapse collapse">
    <ul class="navbar-nav mr-auto"></ul>
    <ul class="navbar-nav" style="font-size: 15px;text-transform: uppercase;">
        <li class="nav-item ">
            <a class="nav-link {{ Route::currentRouteName() == 'front.index' ? 'text-white' : ' ' }} "
                href="{{ route('front.index') }}" style="color: #9DC6F9">Home</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ Route::currentRouteName() == 'front.notice' ? 'text-white' : ' ' }}"
                href="{{ route('front.notice') }}" style="color: #9DC6F9">Notice</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'front.gallery' ? 'text-white' : ' ' }}"
                href="{{ route('front.gallery') }}" style="color: #9DC6F9">Gallery</a>
        </li>

        <li class="btn-group mil">
            <button type="button" role="button" class="btn btn-primary"
                style="padding: 10px 0px 14px;background-color: #0c294c;">
                <a class="dropdown-btn {{ Route::currentRouteName() == 'about.us' || Route::currentRouteName() == 'about.process' || Route::currentRouteName() == 'about.infrastructure' ? 'text-white' : '' }}"
                    href="{{ route('about.us') }}" target="_top"
                    style="color: #9DC6F9;text-transform: uppercase;">About Us</a>
            </button>
            <button type="button" role="button" class="button btn btn-primary dropdown-toggle dropdown-toggle-split"
                data-toggle="dropdown" style="background-color: #0c294c; float: none; aria-expanded:true;"></button>
            <div class="dropdown-menu" style="background: rgba(13, 33, 58, 0.77); text-align:left; margin-top: 0; ">
                <a class="dropdown-item" href="{{ route('about.process') }}">Process</a>
                <a class="dropdown-item" href="{{ route('about.infrastructure') }}">Infrastructer</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'contact.us' ? 'text-white' : ' ' }}"
                href="{{ route('contact.us') }}" style="color: #9DC6F9">Contact Us</a>
        </li>
    </ul>
</div>
