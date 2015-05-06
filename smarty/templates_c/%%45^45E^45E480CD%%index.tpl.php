<?php /* Smarty version 2.6.28, created on 2015-05-06 14:24:03
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 1, false),array('function', 'html_options', 'index.tpl', 61, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['header_tpl']).".tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['title'],'name' => ((is_array($_tmp=@$this->_tpl_vars['name']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body style="padding: 30px;">
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <form align='center' style="width:700px" class="form-horizontal" method="post" accept-charset="utf-8">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <div class="radio">
                    <label>
                        <input type="radio" name="private" value="0" <?php if (! isset ( $this->_tpl_vars['name']['private'] ) || $this->_tpl_vars['name']['private'] == 0): ?>checked<?php endif; ?>>Частное лицо
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="private" value="1" <?php if ($this->_tpl_vars['name']['private'] == 1): ?>checked<?php endif; ?>>Компания
                    </label>   
                </div>
            </div>
        </div>

        <div class="form-group ">
            <label class="col-sm-4 text-right"><b>Ваше имя</b></label>
            <div class="col-sm-8 ">
                <input class="form-control" type="text" maxlength="40" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['seller_name'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="seller_name" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Электронная почта</label>
            <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['email'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="email">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 ">
                <div class="checkbox">
                    <label>
                        <input type='hidden' value=' ' name="allow_mails">
                        <input type="checkbox" value="checked" name="allow_mails" <?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['allow_mails'])) ? $this->_run_mod_handler('default', true, $_tmp, ' ') : smarty_modifier_default($_tmp, ' ')); ?>
>
                        Я не хочу получать вопросы по объявлению по e-mail
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Номер телефона</label>
            <div class="col-sm-8">
                <input class="form-control" type="text" maxlength="11" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['phone'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="phone">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Город</label>
            <div class="col-sm-8">
                <select class="form-control" name=location_id title="Выберите Ваш город">
                    <option disabled="disabled">-- Города --</option>
                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cities'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['name']['location_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Категория</label>
            <div class="col-sm-8">
                <select class="form-control" name=category_id title="Выберите категорию объявления">
                    <option value="">-- Выберите категорию --</option>
                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['categories'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['name']['category_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Название объявления</label>
            <div class="col-sm-8">
                <input class="form-control" type="text" maxlength="50" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" name="title" required> 
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Описание объявления</label> 
            <div class="col-sm-8">
                <textarea class="form-control" maxlength="3000" name="description"><?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea> 
            </div>
        </div>

        <div class="form-group"> 
            <label class="col-sm-4 text-right">Цена</label> 
            <div class="col-sm-8">
                <div class="input-group">
                    <input class="form-control" type="text" maxlength="9" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name']['price'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
" name="price">
                    <span class="input-group-addon">.00</span>
                </div>
            </div>  
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <?php if (! isset ( $this->_tpl_vars['show'] )): ?>
                    <input class="btn btn-info" type="submit" name="button_add" value="Подать объявление" formaction="index.php">
                <?php else: ?>
                    <input class="btn btn-info" type="submit" name="button_add" value="Изменить объявление" formaction="index.php?id=<?php echo $this->_tpl_vars['show']; ?>
">
                    <div >
                        <br>
                        <button class="btn btn-default" formaction="index.php">Отмена</button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <br>
  </form>  

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>