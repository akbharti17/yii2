<?php

use yii\helpers\Html;
?>
<?php
if (yii::$app->session->hasFlash('message')) {
?>
    <div class="alert alert-success alert-dismissible my-3">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo yii::$app->session->getFlash('message'); ?>
    </div>
<?php
}

?>


<div class="conatiner">
    <table class="table table-bordered text-center">
        <thead class="text-center">
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Dob</th>
            <th>Image</th>
            <th>delete</th>
            <th>Edit</th>
        </thead>
        <tbody>
            <?php
            $data=Yii::$app->cache->get('d');
            if($data==''){
               echo "No record found";
            }else{
                foreach ($data as $d) {
                    ?>
                        <tr>
                            <td><?php echo $d->name; ?></td>
                            <td><?php echo $d->mobile; ?></td>
                            <td><?php echo $d->email; ?></td>
                            <td><?php echo $d->dob; ?></td>
                            <td><img src="../../web/<?php echo $d->image; ?>" alt="" width="200" height="100"></td>
                            <th><?= Html::a('delete', ['delete', 'id' => $d->id], ['class' => 'btn btn-danger']) ?></th>
                            <th><?= Html::a('Edit', ['update', 'id' => $d->id], ['class' => 'btn btn-info']) ?></th>
                        </tr>
                    <?php
                    }
            }
            ?>
        </tbody>
    </table>
    <?= Html::a('Refresh Table', ['cache', 'id' =>'d'], ['class' => 'btn btn-info']) ?>
    
    
</div>
