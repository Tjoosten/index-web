<div class="form-group row">
    <div class="col-12">
        <div class="alert alert-warning" role="alert">
            <strong><i class="fa fa-warning"></i> Info:</strong> Indien u niet over een vertaling beschikt mag u dit formulie leeg laten.
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Naam: </label>

    <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="De naam van de categorie." name="name[en]" value="{{ old('name.fr') }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label text-lg-right">Beschrijving: </label>

    <div class="col-lg-10">
        <textarea name="description[en]" placeholder="De beschrijving van categorie" class="form-control" rows="7">{{ old('description.fr') }}</textarea>
    </div>
</div>