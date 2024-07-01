<x-portal::input.image name="image" label="Thumbnail" placeholder="Thumbnail"
    horizontal>{{ old('image') }}</x-portal::input.image>
<x-portal::input.select name="categories_id" label="Kategori" class="searchable" horizontal>
    <option value="">Pilih Kategori</option>
    @foreach ($categories as $r)
        <option value="{{ $r->id }}">{{ $r->name }}</option>
    @endforeach
</x-portal::input.select>
<x-portal::input type="text" name="title" label="Judul" placeholder="Judul"
    horizontal>{{ old('title') }}</x-portal::input>
<x-portal::input type="text" name="description" label="Deskripsi" placeholder="Deskripsi"
    horizontal>{{ old('description') }}</x-portal::input>
<x-portal::input.wysiwyg name="content" label="Konten" placeholder="Konten"
    horizontal>{!! old('content') !!}</x-portal::input.wysiwyg>
<x-portal::input.select.asset />
<x-portal::input.wysiwyg.asset />
