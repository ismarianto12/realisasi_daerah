 <table>
     <thead>
         <th>#</th>
         <th>Kode</th>
         <th>Nama Rekening</th>
         <th>Jumlah</th>
     </thead>
     <tbody>
         <?php
             $j = 1;
         ?>
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <?php
                 $bold = $ls->ganti == '' ? 'background: #d2c7c7;font-weight: bold;' : '';
             ?>
             <tr style="<?php echo e($bold); ?>">
                 <td><?php echo e($j); ?></td>
                 <td><?php echo e($ls->kd_rek_akun); ?></td>
                 <td><?php echo e($ls->nm_rek_akun); ?></td>
                 <td><?php echo e(number_format($ls->jumlah, 0, 0, '.')); ?></td>
             </tr>
             <?php
                 $j++;
             ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
 </table>
<?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/dashboard/listhometable.blade.php ENDPATH**/ ?>