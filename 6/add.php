<?php
$work = TampilWork();
$salary = TampilSalary();
if (isset($_POST['add'])) {
    echo Add($_POST);
}
?>
<button type="button" class="btn text-light btn-warning btn-sm col" data-toggle="modal" data-target="#tambah">
    ADD
</button>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input required type="text" name="name" id="" class="form-control" placeholder="Name..">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="work" id="">
                            <option>Work...</option>
                            <?php foreach ($work as $w) : ?>
                                <option value="<?= $w['id'] ?>"><?= $w['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="salary" id="">
                            <option>Salary...</option>
                            <?php foreach ($salary as $s) : ?>
                                <option value="<?= $s['id'] ?>"><?= 'Rp. ' . str_replace(',', '.', number_format($s['salary'])) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name='add' class="btn text-light btn-warning">ADD</button>
                </div>
            </div>
        </form>
    </div>
</div>