<h1>Add article</h1>
<form method="POST" enctype="multipart/form-data" action="/article/save">
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label>Tags</label>
        <div id="tags">
            <?php foreach (\App\Models\Tag::all() as $tag): ?>
                <label><input type="checkbox" name="tags[]" value="<?= $tag->tag_id ?>"><?= $tag->name ?></label>
            <?php endforeach; ?>
        </div>
    </div>
    <div>
        <label for="image">Image</label>
        <input type="file" id="image" name="image">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea id="content" rows="20" name="content"></textarea>
    </div>
    <input type="hidden" name="user_id" value="2">
    <button type="submit">Save</button>
</form>