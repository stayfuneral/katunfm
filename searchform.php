<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
<div class="row">
<div class="col-8 col-md-12 mb-2"><input class="form-control" type="text" value="<?php echo get_search_query() ?>" name="s" id="s"placeholder="Что ищем?" /></div>
<div class="col-4 col-md-12"><button type="submit" id="searchsubmit" class="btn btn-info">Искать!</button></div>


</div>

    
</form>