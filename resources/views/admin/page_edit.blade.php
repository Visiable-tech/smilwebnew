@include('admin.common.header')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Page</h5>

                    <!-- General Form Elements -->
                    <form method="POST" action="{{ url('/admin/posts/' . $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-form-label">Title</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control page_title" name="title" value="{{ $post->title }}" required>
                                    </div>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-form-label">Page Slug</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control page_slug" name="slug" value="{{ $post->slug }}" required>
                                    </div>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <label for="inputText" class="col-form-label">Page Content</label>
                                <div class="col-sm-12">
                                    <textarea name="content" class="form-control" cols="10" rows="15" required >{{ $post->content }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-form-label">Expert</label>
                                <div class="col-sm-12">
                                    <textarea name="expert" class="form-control" cols="10" rows="5" required>{{ $post->expert }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="inputNumber" class="col-form-label">Main Image</label>
                                    <div class="col-sm-12">
                                        <img src="{{ asset($post->image) }}" style="width:300px" />
                                        <input class="form-control" type="file" id="formFile" name="image" >
                                    </div>
                                </div>                                
                                <div class="col-sm-6">                                    
                                    <label for="inputText" class="col-form-label">Image ALT</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="image_alt" value="{{ $post->image_alt }}">
                                    </div>
                                </div>
                            </div><div class="row mb-3">
                                <div class="col-sm-12">
                                    <label for="inputText" class="col-form-label">SEO Title</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="seo_title" value="{{ $post->meta->seo_title }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-form-label">SEO Description</label>
                                <div class="col-sm-12">
                                    <textarea name="description" class="form-control" cols="10" rows="5" required>{{ $post->meta->description }}</textarea>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Update Page</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>    
    </section>    
@include('admin.common.footer')
