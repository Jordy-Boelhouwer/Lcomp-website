<form method="POST" action="{{ route('wifiScan.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="firstName">@lang('contact.first-name')</label>
        <input type="text" class="form-control" id="firstName" name="first_name" required>
    </div>
    <div class="form-group">
        <label for="middleName">@lang('contact.middle-name') <small>(@lang('contact.optional'))</small></label>
        <input type="text" class="form-control" id="middleName" name="middle_name">
    </div>
    <div class="form-group">
        <label for="lastName">@lang('contact.last-name')</label>
        <input type="text" class="form-control" id="lastName" name="last_name" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phoneNumber">@lang('wifi.phone-number')</label>
        <input type="text" class="form-control" id="phoneNumber" name="phone_number" required>
    </div>
    <div class="form-group">
        <label for="question">@lang('wifi.message') <small>(Max 500 karakters)</small></label>
        <textarea type="text" class="form-control" id="question" name="question" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">@lang('contact.send')</button>
    </div>

    <div class="form-group">
        @include('partials/errors')
    </div>
    <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
</form>

