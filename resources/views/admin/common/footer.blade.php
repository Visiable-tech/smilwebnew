<!-- ======= Footer ======= -->

</main>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/admin_assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/admin_assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/admin_assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/admin_assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/admin_assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/admin_assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/admin_assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/admin_assets/js/main.js') }}"></script>

<!--Gallery Thumbnail-->
  <script>
    const imageInput = document.getElementById('imageUpload');
    const preview = document.getElementById('preview');
    let filesArray = [];

    imageInput.addEventListener('change', function (e) {
        filesArray = Array.from(e.target.files);
        showThumbnails();
    });

    function showThumbnails() {
        preview.innerHTML = ''; // Clear previous preview
        filesArray.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imgDiv = document.createElement('div');
                imgDiv.style.position = 'relative';
                imgDiv.innerHTML = `
                    <img src="${e.target.result}" style="width: 100px; height: 100px; object-fit: cover; border: 1px solid #ccc;" />
                    <span onclick="removeImage(${index})" style="position: absolute; top: -8px; right: -8px; background: red; color: white; border-radius: 50%; padding: 2px 6px; cursor: pointer;">&times;</span>
                `;
                preview.appendChild(imgDiv);
            };
            reader.readAsDataURL(file);
        });

        // Update input with filtered files
        updateInputFiles();
    }

    function removeImage(index) {
        filesArray.splice(index, 1);
        showThumbnails();
    }

    function updateInputFiles() {
        const dataTransfer = new DataTransfer();
        filesArray.forEach(file => dataTransfer.items.add(file));
        imageInput.files = dataTransfer.files;
    }
</script>
<!--End Gallery Thumbnail-->

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: '{{ route("media.upload") }}?&_token={{ csrf_token() }}'
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    function copyToClipboard(id) {
        var copyText = document.getElementById("link-" + id);
        copyText.select();
        copyText.setSelectionRange(0, 99999); 
        document.execCommand("copy");
        alert("Copied: " + copyText.value);
    }
</script>


</body>

</html>