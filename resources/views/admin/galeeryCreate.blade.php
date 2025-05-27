@include('admin.common.header')
<section class="section">
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Gallery</h5>
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-9">
                                <label>Gallery Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-sm-3">
                                <label>Select Year</label>
                                @php
                                    $startYear = 2011;
                                    $endYear = date('Y') + 2; // Adds 1 year to current year
                                    $currentYear = date('Y');
                                @endphp
                                <select name="year" class="form-control" required >
                                    @for ($year = $startYear; $year <= $endYear; $year++)
                                        <option value="{{ $year }}" {{ $year == $currentYear ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Upload Images</label>
                            <input type="file" id="imageUpload" name="images[]" multiple accept="image/*" class="form-control">
                        </div>

                        <!-- Preview Area -->
                        <div id="preview" style="display: flex; flex-wrap: wrap; gap: 10px;"></div>

                        <button type="submit" class="btn btn-primary">Create Gallery</button>
                    </form>

                </div>    
            </div>    
        </div>    
    </div>    
</section>    

@include('admin.common.footer')