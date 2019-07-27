<?php
$work = TampilWork();
$salary = TampilSalary();


?>
<a href="#ubah<?= $d['id'] ?>" class="text-blue" data-toggle="modal" data-target="#ubah<?= $d['id'] ?>">
    <i class="fas fa-edit    " style="font-size:25px"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="ubah<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EDIT DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="<?= $d['id'] ?>" name="id">
                    <div class="form-group">
                        <input required type="text" value="<?= $d['Name']; ?>" name="name" id="" class="form-control" placeholder="Name..">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="work" id="">
                            <option>Work...</option>
                            <?php foreach ($work as $w) :

                                ?>
                                <option <?php if ($d['id_work'] == $w['id']) {
                                            echo 'selected';
                                        } ?> value="<?= $w['id'] ?>"><?= $w['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="salary" id="">
                            <option>Salary...</option>
                            <?php foreach ($salary as $s) :
                                ?>
                                <option <?php

                                        if ($s['id'] === $d['id_salary']) {
                                            echo "selected";
                                        } ?> value="<?= $s['id'] ?>"><?= 'Rp. ' . str_replace(',', '.', number_format($s['salary'])) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name='edit' class="btn text-light btn-warning">ADD</button>
                </div>
            </div>
        </form>
    </div>
</div>