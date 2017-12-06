<div class="form-group row">
    <label class="col-lg-2 col-form-label txt-lg-right">Foto artikel: <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <input type="file" placeholder="test" name="article_image" class="form-control{{ $errors->has('article_image') ? ' is-invalid' : '' }}" value="{{ old('article_image') }}">


        @if ($errors->has('article_image'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('article_image') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label txt-lg-right">Publicatie datum: <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <input type="date" class="form-control{{ $errors->has('publish_date') ? ' is-invalid' : '' }}" value="{{ old('published_date') ?: date('Y-m-d') }}" name="publish_date">

        @if ($errors->has('publish_date'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('publish_date') }}</strong>
            </div>
        @else {{-- Display help text --}}
            <small class="form-text text-muted">
                <span class="text-strong">*</span> Datum formaat: YYYY/MM/DD.
            </small>
        @endif
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label txt-lg-right">Publicatie status <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <select class="form-control {{ $errors->has('is_published') ? ' is-invalid' : '' }}" name="is_published">
            <option value="">-- Selecteer de status --</option>
            <option value="Y" @if (old('is_published') == 'Y') selected @endif >Publiceer</option>
            <option value="N" @if (old('is_published') == 'N') selected @endif>Klad versie</option>
        </select>

        @if ($errors->has('is_published'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('is_published') }}</strong>
            </div>
        @endif
    </div>
</div>