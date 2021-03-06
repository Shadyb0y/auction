<?php

/**
 *
 * @author Ivan Teleshun <teleshun.ivan@gmail.com>
 * @link http://molotoksoftware.com/
 * @copyright 2016 MolotokSoftware
 * @license GNU General Public License, version 3
 */

/**
 * 
 * This file is part of MolotokSoftware.
 *
 * MolotokSoftware is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * MolotokSoftware is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with MolotokSoftware.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Попап - Удалить из покупок.
 */
?>

<div id="deleteSale" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <?php 
        $deleteSaleForm =$this->beginWidget('CActiveForm', [
            'id' => 'delete-purchase',
        ]);
      ?>

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Удаление информации о сделках</h4>
      </div>
      <div class="modal-body">
        Вы действительно хотите удалить информацию о выбранных сделках?
      </div>
      <div id="hidden-form">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <?php
            echo CHtml::ajaxSubmitButton('Да, удалить', ['/user/sales/markDeleted'],
                    [
                       'type' => 'POST',
                       'dataType' => 'json',
                       'success' => 'function() {
                           window.location.reload();
                        }',

                    ],
                    ['class' => 'btn btn-primary']
                 );
        ?>
      </div>
      <?php
        $this->endWidget(); 
      ?>
    </div>
  </div>
</div>