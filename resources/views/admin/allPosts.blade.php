@include('admin.common.header')
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Pages</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Page Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @php $cnt = 1; @endphp 
                  @foreach($post as $posts)
                      <tr>
                        <th scope="row">{{ $cnt; }}</th>
                        <td>{{ $posts->title; }}</td>
                        <td>{{ $posts->slug; }}</td>
                        <td>{{ \Carbon\Carbon::parse($posts->blog_date)->format('j F, Y') }}</td>
                        <td><a href="/admin/posts/{{ $posts->id }}/edit" class="btn btn-warning">Edit</a></td>
                        <td><a href="/admin/posts/{{ $posts->id }}/delete" class="btn btn-danger del_btn">Delete</a></td>
                      </tr>
                    @php $cnt++; @endphp
                  @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
    </div>    
</section>    
@include('admin.common.footer')