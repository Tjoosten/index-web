<div class="form-group row">
    <label class="col-lg-2 col-form-label txt-lg-right">Foto artikel: <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <label class=" col-lg-10 custom-file">
            {{-- TODO: Translate the text. see: https://getbootstrap.com/docs/4.0/components/forms/#file-browser --}}
            <input type="file" placeholder="test" name="article_image" class="custom-file-input{{ $errors->has('article_image') ? ' is-invalid' : '' }}" value="{{ old('article_image') }}">
            <span class="custom-file-control"></span>
        </label>

        @if ($errors->has('image_article'))
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
                <span class="text-strong">*</span> Datum formaat: DD/MM/YYY. (/) kan ook worden vervangen door een (-)
            </small>
        @endif
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Publicatie status <span class="text-danger">*</span></label>

    <div class="col-lg-10">
        <select class="form-control" name="is_published">
            <option value="">-- Selecteer de status --</option>
            <option value="Y">Publiceer</option>
            <option value="N">Klad versie</option>
        </select>
    </div>
</div>