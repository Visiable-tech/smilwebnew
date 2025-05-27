@include('admin.common.header')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create New Blog</h5>

                    <!-- General Form Elements -->
                        <form method="POST" action="{{ url('/admin/blogs') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control page_title" name="title" required>
                                        <input type="hidden" class="form-control" name="post_type" value="2" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">    
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-form-label">Page Slug</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control page_slug" name="slug" required>
                                    </div>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <label for="inputText" class="col-form-label">Page Content</label>
                                <div class="col-sm-12">
                                    <textarea name="content" class="form-control" cols="10" rows="15" id="editor" required ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-form-label">Expert</label>
                                <div class="col-sm-12">
                                    <textarea name="expert" class="form-control" cols="10" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="inputNumber" class="col-form-label">Main Image</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    </div>
                                </div>                                
                                <div class="col-sm-6">
                                    <label for="inputText" class="col-form-label">Image ALT</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="image_alt">
                                    </div>
                                </div>
                            </div><div class="row mb-3">
                                <div class="col-sm-9">
                                    <label for="inputText" class="col-form-label">SEO Title</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="seo_title" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputText" class="col-form-label">Blog Date</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" name="created_date" min="2016-12-01" value="2016-12-01" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-form-label">SEO Description</label>
                                <div class="col-sm-12">
                                    <textarea name="description" class="form-control" cols="10" rows="5"></textarea>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>    
    </section>    
@include('admin.common.footer')
