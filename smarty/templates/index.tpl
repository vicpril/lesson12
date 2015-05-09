{include file="$header_tpl.tpl" title=$title name=$name.title|default:''}

<body style="padding: 30px;">

    <div class="container">
        <div class="row">
            <nav style="padding: 30px;" class="navbar navbar-fixed-top col-sm-4 hidden-xs">
            <div class=" visible-lg">
                {include file="form_full.tpl"}
            </div>
            <div class=" visible-md visible-sm">
                {include file="form_small.tpl"}
            </div>
            </nav>

            <div class="col-sm-8 col-sm-offset-4 ">
                {include file="table.tpl"}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 visible-xs">
                {include file="form_full.tpl"}
            </div>
        </div>
    </div>    



    {include file="footer.tpl"}