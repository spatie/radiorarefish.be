{!! csrf_field() !!}

<div class="form-group">
    <label for="name">Name:</label>
    <input class="form-control" name="name" value="{{ old('name', $playlist->name) }}">
    @if($errors->has('name'))
        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="name">Text:</label>
    <textarea class="form-control" name="text">{{ old('name', $playlist->text) }}</textarea>
    @if($errors->has('text'))
        <div class="alert alert-danger">{{ $errors->first('text') }}</div>
    @endif
</div>

<div class="form-group">
    <label for="name">Publish date:</label>
    <input class="form-control" name="name" value="{{ old('publish_date', $playlist->publish_date) }}">
    @if($errors->has('publish_date'))
        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @endif
</div>

<input class="btn btn-primary" type="submit" value="{{ $submitText }}">