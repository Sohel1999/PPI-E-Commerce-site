<?php
require_once '../partials/__desh_header.php';
?>
<?php
require_once '../partials/__desh_sidebar.php'; ?>
<main style="margin-top:50px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card card-body">
                    <form>
                        <div class="col-sm-12">
                            <h1 class="text-center text-secondary">Category</h1>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Category">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFname" class="col-sm-3 col-form-label">Slug</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputFname" placeholder="Slug ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="status">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-primary btn-block">Category Add        </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once '../partials/__desh_footer.php';
?>
