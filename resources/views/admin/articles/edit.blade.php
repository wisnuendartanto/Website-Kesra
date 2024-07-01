<x-portal::input.image name="image" label="Thumbnail" placeholder="Thumbnail"
    horizontal>{{ $row->image }}</x-portal::input.image><x-portal::input.select name="categories_id" label="Kategori"
    class="searchable" horizontal>
    <option value="">Pilih Kategori</option>
</x-portal::input.select>
<x-portal::input type="text" name="title" label="Judul" placeholder="Judul"
    horizontal>{{ $row->title }}</x-portal::input>
<x-portal::input type="text" name="description" label="Deskripsi" placeholder="Deskripsi"
    horizontal>{{ $row->description }}</x-portal::input>
<x-portal::input.wysiwyg name="content" label="Konten" placeholder="Konten"
    horizontal>{!! $row->content !!}</x-portal::input.wysiwyg>
<x-portal::input.select.asset />
<x-portal::input.wysiwyg.asset />
