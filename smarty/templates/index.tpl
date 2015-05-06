{include file="$header_tpl.tpl" title=$title name=$name.title|default:''}

<body style="padding: 30px;">
    
    {include file="table.tpl"}
    
    <form align='center' style="width:700px" class="form-horizontal" method="post" accept-charset="utf-8">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <div class="radio">
                    <label>
                        <input type="radio" name="private" value="0" {if !isset($name.private) || $name.private == 0}checked{/if}>Частное лицо
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="private" value="1" {if $name.private == 1}checked{/if}>Компания
                    </label>   
                </div>
            </div>
        </div>

        <div class="form-group ">
            <label class="col-sm-4 text-right"><b>Ваше имя</b></label>
            <div class="col-sm-8 ">
                <input class="form-control" type="text" maxlength="40" value="{$name.seller_name|default:''}" name="seller_name" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Электронная почта</label>
            <div class="col-sm-8">
                <input class="form-control" type="text" value="{$name.email|default:''}" name="email">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 ">
                <div class="checkbox">
                    <label>
                        <input type='hidden' value=' ' name="allow_mails">
                        <input type="checkbox" value="checked" name="allow_mails" {$name.allow_mails|default:' '}>
                        Я не хочу получать вопросы по объявлению по e-mail
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Номер телефона</label>
            <div class="col-sm-8">
                <input class="form-control" type="text" maxlength="11" value="{$name.phone|default:''}" name="phone">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Город</label>
            <div class="col-sm-8">
                <select class="form-control" name=location_id title="Выберите Ваш город">
                    <option disabled="disabled">-- Города --</option>
                    {html_options options=$cities selected=$name.location_id|default:''}
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Категория</label>
            <div class="col-sm-8">
                <select class="form-control" name=category_id title="Выберите категорию объявления">
                    <option value="">-- Выберите категорию --</option>
                    {html_options  options=$categories selected=$name.category_id|default:''}
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Название объявления</label>
            <div class="col-sm-8">
                <input class="form-control" type="text" maxlength="50" value="{$name.title|default:''}" name="title" required> 
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 text-right">Описание объявления</label> 
            <div class="col-sm-8">
                <textarea class="form-control" maxlength="3000" name="description">{$name.description|default:''}</textarea> 
            </div>
        </div>

        <div class="form-group"> 
            <label class="col-sm-4 text-right">Цена</label> 
            <div class="col-sm-8">
                <div class="input-group">
                    <input class="form-control" type="text" maxlength="9" value="{$name.price|default:'0'}" name="price">
                    <span class="input-group-addon">.00</span>
                </div>
            </div>  
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                {if !isset($show)}
                    <input class="btn btn-info" type="submit" name="button_add" value="Подать объявление" formaction="index.php">
                {else}
                    <input class="btn btn-info" type="submit" name="button_add" value="Изменить объявление" formaction="index.php?id={$show}">
                    <div >
                        <br>
                        <button class="btn btn-default" formaction="index.php">Отмена</button>
                    </div>
                {/if}
            </div>
        </div>
        <br>
  </form>  

    {include file="footer.tpl"}