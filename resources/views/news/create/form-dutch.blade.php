<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Titel: <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <input type="text" placeholder="De titel van het bericht" class="form-control{{ $errors->has('title.nl') ? ' is-invalid' : '' }}" name="title[nl]" value="{{ old('title.nl') }}">

        @if ($errors->has('title.nl'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('title.nl') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Categorieen: <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <input type="text" placeholder="Bericht categorieen" class="form-control{{ $errors->has('categories.nl') ? ' is-invalid' : '' }}" name="categories[nl]" value="{{ old('categories.nl') }}">

        @if ($errors->has('categories.nl'))
            <div class="invdalid-feedback">
                <strong>{{ $errors->first('categories.nl') }}</strong>
            </div>
        @else {{-- Display help text --}}
            <small class="form-text text-muted">
                <span class="text-strong">*</span> Categories moeten worden worden gespleten met een comma notatie.
            </small>
        @endif
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Bericht: <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <textarea name="message[nl]" id="editor1" rows="7" placeholder="Uw nieuwsbericht" class="form-control{{ $errors->has('message.nl') ? 'is-invalid' : ''}}">{{ old('message.nl') }}</textarea>

        @if ($errors->has('message.nl'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('message.nl') }}</strong>
            </div>
        @endif
    </div>
</div>