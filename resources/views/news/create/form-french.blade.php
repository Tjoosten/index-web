<div class="form-group row">
    <div class="col-12">
        <div class="alert alert-warning" role="alert">
            <strong><i class="fa fa-warning"></i> Info:</strong> Indien u niet over een vertaling beschikt mag u dit formulie leeg laten.
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Titel: </label>

    <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="De titel van het bericht." name="title[fr']" value="{{ old('title.fr') }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Categorieen: </label>

    <div class="col-lg-10">
        <input type="text" placeholder="Bericht categorieen" class="form-control" name="categories[fr]" value="{{ old('categories.fr') }}">
        <small class="form-text text-muted">
            <span class="text-danger">*</span> Categorieen moeten worden gespleten met een comma notatie.
        </small>
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Bericht:</label>

    <div class="col-lg-10">
        <textarea id="editor3" name="message[fr]" rows="7" placeholder="Uw nieuwsbericht" class="form-control">{{ old('message.fr') }}</textarea>
    </div>
</div>