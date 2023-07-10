<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3>Surat Edaran</h3>
            <div class="card mt-3">
                <div class="card-header">
                    Form Perbarui Surat Edaran <a href="admin/Admin/detailSuratEdaran" class="btn btn-sm btn-warning text-white"><i class="fas fa-envelope"></i> Lihat Surat</a>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">No Surat</label>
                            <input type="text" class="form-control" value="<?=$edaran['no_surat']?>" name="no_surat">
                            <input type="hidden" class="form-control" value="<?=$edaran['id_surat']?>" name="id_surat">
                        </div>
                         <div class="form-group">
                            <label for="">isi Surat</label>
                            <textarea name="isi_surat" id="summernote" cols="30" rows="10"  value="<?=$edaran['isi_surat']?>">
                                <?=$edaran['isi_surat']?>
                             </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      
    </script>