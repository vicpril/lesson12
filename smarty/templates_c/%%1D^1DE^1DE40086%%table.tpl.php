<?php /* Smarty version 2.6.28, created on 2015-05-06 14:31:00
         compiled from table.tpl */ ?>
<h2 class="sub-header">Доска объявлений</h2>
<form>
    <div class="table-responsive" >
        <table class="table table-hover">
            <thead >
                <tr>
                    <th>Название</th>
                    <th></th>
                    <th>Имя автора</th>
                    <th>Цена</th>
                    <th>Дата публикации</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php echo $this->_tpl_vars['exp_rows']; ?>

            </tbody>
        </table>
    </div>
</form>