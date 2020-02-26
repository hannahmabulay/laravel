<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="columns">
        <div class="column is-one-fifth">

        </div>
        <div class="column is-three-fifths">
            <h1>Add a new Artist</h1>
            <form method="post" action="/artist/{{$oldArtist->id}}">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" name="name" id="name" value="{{ $oldArtist->name }}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <textarea class="textarea" name="description" id="description">{{ $oldArtist->description }}  </textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label">&nbsp;</label>
                    <div class="control">
                        <button class="button is-primary"><i class="fa fa-save"></i> &nbsp;UPDATE ARTIST</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column is-one-fifth">

        </div>
    </div>

</body>
</html>
