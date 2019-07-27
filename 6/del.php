<!-- Button trigger modal -->
<a href="" class=" text-danger mr-2" data-toggle="modal" data-target="#del<?= $d['id'] ?>">
    <i class="fas fa-trash    " style="font-size:22px;"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="del<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $d['id']; ?>">
                    <input type="hidden" name="name" value="<?= $d['Name']; ?>">
                    <i class="fas fa-exclamation-triangle text-danger mb-2 mt-3" style="font-size:80px"></i>
                    <h3>Hapus Data?</h3>
                    <h5>Data akan dihapus permanen</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="del" class="btn btn-danger">Iya, Hapus Data</button>
                </div>
            </div>
        </form>
    </div>
</div>