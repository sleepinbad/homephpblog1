<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/add" method="post">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label>Text</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Background Image</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Add a post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>